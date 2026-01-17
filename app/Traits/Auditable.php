<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

trait Auditable
{
    protected static function bootAuditable(): void
    {
        static::created(function ($model) {
            self::logAudit('created', $model);
        });

        static::updated(function ($model) {
            self::logAudit('updated', $model, $model->getChanges(), $model->getOriginal());
        });

        static::deleted(function ($model) {
            self::logAudit('deleted', $model);
        });
    }

    protected static function logAudit(string $action, $model, array $changes = [], array $original = []): void
    {
        $userId = null;
        $userType = null;

        if (Auth::guard('student')->check()) {
            $userId = Auth::guard('student')->id();
            $userType = 'student';
        } elseif (Auth::check()) {
            $userId = Auth::id();
            $userType = 'user';
        }

        $context = [
            'model' => get_class($model),
            'model_id' => $model->getKey(),
            'action' => $action,
            'user_id' => $userId,
            'user_type' => $userType,
            'ip' => request()->ip(),
            'timestamp' => now()->toIso8601String(),
        ];

        if (!empty($changes)) {
            $context['changes'] = self::sanitizeForLog($changes);
        }

        if (!empty($original) && $action === 'updated') {
            $changedKeys = array_keys($changes);
            $context['previous'] = self::sanitizeForLog(
                array_intersect_key($original, array_flip($changedKeys))
            );
        }

        Log::channel('security')->info("Audit: {$action} " . class_basename($model), $context);
    }

    protected static function sanitizeForLog(array $data): array
    {
        $sensitiveFields = ['password', 'token', 'secret', 'api_key', 'credit_card'];

        foreach ($data as $key => $value) {
            foreach ($sensitiveFields as $field) {
                if (stripos($key, $field) !== false) {
                    $data[$key] = '[REDACTED]';
                    break;
                }
            }
        }

        return $data;
    }
}
