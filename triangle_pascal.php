<html>

	<head>

		<title>Triangle de Pascal -- pour une quation de la forme (x+y)</title>
		<li nk rel= " stylesheet " href= " styles.css "> 

	</head>

	<body style= " background-color: #a4000000;
	padding: 50 px; 
	width: 400 px; 
	border: 5px solid #777; 
	 }  " >

		<center>

			<h1 style= "display: inline-block; border: 3px solid black; width:

99%;
display: inline-block; border: 1px solid black; width:55%;
box-shadow: 3px 3px 9px orange ; ">Triangle de Pascal</h1>
			<h2>pour (x+y)<sup>n</sup></h2>

			<br>

			<p>L'axe vertical correspond  la  
			Les lignes correspondent <br/> la puissance n  partir de 0.

			</p>

			<form method="post" action="#">

			   <p>Indiquez la puissance n : <input type="text" name="puissance" size="5" /><input type="submit"/></p>

			</form>

			<br>

			<?php

				// Definition des variables

				$puissance = (int) $_POST['puissance'];

				$colonne = $puissance + 1;

				$ligne = $puissance;

				$_tableau = '';

				$_derniere_ligne = '';

				$equation = '';

				if($puissance!='')

				{

				//Creation du tableau

					$_tableau .= '<table>';

					$_tableau .='<tr align="center"><td width="20" heignt="20"><b>n</b></td>

									<td width="20" heignt="20"><b>|x</b></td>

									<td width="20" heignt="20"><b>\y</b></td>

									</tr>';

					//Remplissage par ligne

					for ($i=0; $i<=$ligne; $i++)

					{//Repetition

					   $_tableau .='<tr align="center">';

					   for ($j=0; $j<=$colonne; $j++)

					   {

							 $_tableau .='<td width="20" heignt="20">';

							 if($j==0)

							 {//Affichage de la puissance

								$_tableau .='<b>';

								$_tableau .=$i;

								$_tableau .='</b>';

							 }

							 elseif($j==1)

							 {//Remplissage du tableau ---- 1�re cellule

								$_cell[]= 1;

								$_tableau .= 1;

							 }

							 elseif($j==$i+1)

							 {//Remplissage du tableau ---- derniere cellule

								$_cell[]= 1;

								$_tableau .= 1;

							 }

							 elseif($j>$i)

							 {//Remplissage du tableau ---- cellules situes apres la derniere cellule

								$_cell[]= '0';

								$_tableau .= '';

							 }

							 else

							 {//Remplissage du tableau ---- les autres cellules situes avant la derniere cellule

								$c = $_cell[((($i-1)*$colonne)+($j-1))-1] + $_cell[((($i-1)*$colonne)+($j))-1];

								$_cell[]= $c;

								$_tableau .= $c;

							 }

							 $_tableau .='</td>';

					   }

					   $_tableau .='</tr>';

					}

					$_tableau .='</table>';

					//Affichage du tableau

					echo $_tableau . '<br><br>';

					//R�cup�ration de la derni�e ligne, celle qui nous interesse

					$i=$ligne;

					for ($j=1; $j<=$colonne; $j++)

					{

						$_derniere_ligne .='' . $_cell[($i * $i) + $j + $i - 1] . ',';

					}

					$derniere_ligne = explode(',',$_derniere_ligne);

					//Creation equation (x+y)

					$equation .= $derniere_ligne[0] . '.x<sup>' . $puissance . '</sup>y<sup>' . ($puissance - $puissance) . '</sup>';//La 1ere ligne est faite manuellement

					for($l=1 AND $puis=1; $puis<=$puissance AND $l<=(count($derniere_ligne)-1); $l++ AND $puis++)

					{

						$equation .= ' + ' . $derniere_ligne[$l] . '.x<sup>' . ($puissance - $puis) . '</sup>y<sup>' . ($puissance - ($puissance - $puis)) . '</sup>';

					}

					//Affichage de l'�quation

					$equation_finale = '(x+y)<sup>'. $puissance . '</sup> = ' . $equation;

					echo $equation_finale;

					//FIN

				}

				else

				

			?>

		</center>

	</body> 
	<br/>
	
       <footer>
	       <p style= " color: #0; font-size: 20 px; " >
	       Design par Alpha TCHIBAMBE TCHIBAMBE
	           
	       </p>
	       </footer>

</html>