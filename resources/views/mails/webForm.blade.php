<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light only">
    <meta name="supported-color-schemes" content="light">
    <title>Nuevo mensaje de contacto</title>
    <style type="text/css">
        :root {
            color-scheme: light only;
            supported-color-schemes: light;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica', 'Arial', sans-serif; background-color: #f3f4f6;">
    <table cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #f3f4f6;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="max-width: 600px; background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); overflow: hidden;">

                    <tr>
                        <td style="background-color: #F57F17; background: linear-gradient(135deg, #F57F17 0%, #F9A825 100%); padding: 50px 40px; text-align: center;">
                            <table cellspacing="0" cellpadding="0" border="0" width="80" align="center" style="margin-bottom: 24px;">
                                <tr>
                                    <td style="background-color: rgba(255, 255, 255, 0.2); width: 80px; height: 80px; border-radius: 50%; text-align: center; vertical-align: middle;">
                                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle;">
                                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22 6L12 13L2 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </td>
                                </tr>
                            </table>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700; letter-spacing: -0.5px;">Nuevo Mensaje de Contacto</h1>
                            <p style="margin: 12px 0 0; color: #ffffff; opacity: 0.9; font-size: 15px;">Formulario web de contacto</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 48px 40px;">
                            <p style="margin: 0 0 32px; color: #6b7280; font-size: 15px; line-height: 1.6;">Se ha recibido un nuevo mensaje desde el formulario de contacto del sitio web.</p>

                            <table cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #fef3c7; border-radius: 12px; margin-bottom: 24px;">
                                <tr>
                                    <td style="padding: 24px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 16px;">
                                            <tr>
                                                <td width="50%" style="padding-right: 8px;">
                                                    <p style="margin: 0 0 6px; color: #92400e; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Nombre</p>
                                                    <p style="margin: 0; color: #78350f; font-size: 16px; font-weight: 600;">{{ $details['name'] }}</p>
                                                </td>
                                                <td width="50%" style="padding-left: 8px;">
                                                    <p style="margin: 0 0 6px; color: #92400e; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Teléfono</p>
                                                    <p style="margin: 0; color: #78350f; font-size: 16px; font-weight: 600;">{{ $details['cel'] }}</p>
                                                </td>
                                            </tr>
                                        </table>

                                        <table cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 16px;">
                                            <tr>
                                                <td>
                                                    <p style="margin: 0 0 6px; color: #92400e; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Correo electrónico</p>
                                                    <p style="margin: 0; color: #78350f; font-size: 16px; font-weight: 600;">{{ $details['mail'] }}</p>
                                                </td>
                                            </tr>
                                        </table>

                                        <table cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 16px;">
                                            <tr>
                                                <td width="50%" style="padding-right: 8px;">
                                                    <p style="margin: 0 0 6px; color: #92400e; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Plantel</p>
                                                    <p style="margin: 0; color: #78350f; font-size: 14px; font-weight: 500;">{{ $details['crew'] }}</p>
                                                </td>
                                                <td width="50%" style="padding-left: 8px;">
                                                    <p style="margin: 0 0 6px; color: #92400e; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Curso</p>
                                                    <p style="margin: 0; color: #78350f; font-size: 14px; font-weight: 500;">{{ $details['course'] }}</p>
                                                </td>
                                            </tr>
                                        </table>

                                        @if($details['msg'])
                                        <p style="margin: 16px 0 6px; color: #92400e; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Mensaje</p>
                                        <p style="margin: 0; color: #78350f; font-size: 14px; line-height: 1.6; background: #ffffff; padding: 12px; border-radius: 8px;">{{ $details['msg'] }}</p>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="background: #1a1a1a; padding: 32px 40px; text-align: center;">
                            <p style="margin: 0; color: #9ca3af; font-size: 13px; line-height: 1.6;">&copy; {{ date('Y') }} Centro de Capacitación CEC<br><span style="color: #6b7280;">Sitio Web</span></p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
