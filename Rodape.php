<?php
	//<!-- Copiar apartir daqui -->
	echo "
	<style>
		
	.FundoFuter{
		position:relative;
		margin-top:20px;
    	bottom:0;
    	width:100%;
		border-top:solid;
		border-color:goldenrod;
		border-width:medium;
		background-color:#333;
		height:250px;
		color:#FFF;
	}
	.Contato{
		width:35%;
		height:auto;
		float:left;
		margin:20px 10% 10px 10px;
		font-size:12px;
	}
	.Contato h2{
		color:goldenrod;
		margin-bottom:10px;
	}
	.Contato p{
		margin-top:10px;
		margin-bottom:10px;
	}
	.Contato img{
		height:15px;
		width:15x;
	}
	.EscolhaFuter{
		float:left;
		font-size:12px;
		margin:20px 10% 10px 10px;
	}
	.EscolhaFuter h2{
		color:goldenrod;
		margin-bottom:10px;
	}
	.EscolhaFuter .OpcaoFuter{
		margin-bottom:10px;
	}
	.EscolhaFuter a{
		color:#FFF;
		text-decoration:none;
	}
	.Contact{
		width:25%;
		float:right;
		font-size:12px;
		margin:20px 30px 10px 10px;
	}
	.Contact h2{
		color:goldenrod;
		margin-bottom:10px;
	}
	.Contact .CampoEmail{
		width:100%;
		margin-bottom:10px;
	}
	.Contact .CampoTexto{
		width:100%;
		height:85px;
		resize:none;
	}
	</style>    
		<footer>
        	<div class=FundoFuter>
    			<div class=Contato>
          		<h2>Bellezza italiana</h2>
                <p align=justify>Nós do Bellezza italiana se preocupamos para trazer uma boa experiência, temos todos os tipos de pratos Italianos e com uma exelente qualidade, segundo as criticas. Pela nossa preocupação dedicimos abrir esse restaurante em um lugar confortavel com uma boa vista e muitas decorações para você se sentir confortavel.</p>
                <table>
           			 <tr>
                		<td><img src=css/img/icon/Telefone.png></td>
                    	<td><p>(55)(11)1234-5678</p></td>
                 	</tr>
                 	<tr>
                    	<td><img src=css/img/icon/Email.png></td>
                    	<td><p>contatorestaurante@restaurante.com</p>
                	</tr>
    			</table>
                </div>

                <div class=EscolhaFuter>
                	<h2>Opções</h2>
                	<ul>
               			<li class=OpcaoFuter><a href=home.php><h1>Home</h1></a></li>
             			<li class=OpcaoFuter><a href=><h1>Sobre</h1></a></li>
             			<li class=OpcaoFuter><a href=><h1>Contato</h1></a></li>
                    </ul>
                
                </div>
                <div class=Contact>
                <h2>Nos Contate</h2> 
              		<input class=CampoEmail type=email name=email placeholder=Email><br>
              		<textarea class=CampoTexto placeholder=Mensagem></textarea><br>
              		<input class=BotaoEnviar type=submit value=Enviar>
                </div>
            </div>
		</footer>		
		";
		//<!-- Até aqui -->
		
?>