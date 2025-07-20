<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje de contacto - OFITEC</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding: 40px 0;">
                <img src="{{ $message->embed(public_path('img/ofitec_logo.webp')) }}" alt="OFITEC" height="60">
            </td>
        </tr>
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
                    <tr>
                        <td style="padding: 40px; text-align: left;">
                            <h2 style="margin-top: 0; color: #333333;">📨 Mensaje de contacto</h2>
                            <p style="font-size: 16px;"><strong>Nombre:</strong> {{ $data['name'] }}</p>
                            <p style="font-size: 16px;"><strong>Correo:</strong> {{ $data['email'] }}</p>
                            <p style="font-size: 16px;"><strong>Teléfono:</strong> {{ $data['phone'] ?? 'No proporcionado' }}</p>
                            <p style="font-size: 16px;"><strong>Asunto:</strong> {{ $data['subject'] ?? 'No proporcionado' }}</p>
                            <p style="font-size: 16px;"><strong>Mensaje:</strong></p>
                            <p style="font-size: 16px; color: #555;">{{ $data['message'] }}</p>

                            <hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">

                            <p style="font-size: 14px; color: #888;">Este mensaje fue enviado desde el sitio web de OFITEC.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 30px; color: #aaa; font-size: 13px;">
                &copy; {{ date('Y') }} OFITEC. Todos los derechos reservados.
            </td>
        </tr>
    </table>

</body>



</html>
