<?php
   
	$lista[0]=5;
	$lista[1]=2;
	$lista[2]=4;
	$lista[3]=1;
	$lista[4]=3;
	//Longitud de la lista
	$lon=count($lista);
	$l=$lon;
	
	mostrarLista($lista,$lon);
    do
    {
		$n=0;
		//Recorrer la lista
		for($i=1;$i<$l;$i++)
		{
			//Verificar si los dos valores estan ordenados
			if($lista[$i-1]>$lista[$i])
			{
				//Ordenar si es necesario
				$temp=$lista[$i-1];
				$lista[$i-1]=$lista[$i];
				$lista[$i]=$temp;
				$n=$i;
				mostrarLista($lista,$lon);
			}
		}
		$l=$n;
	}
	while($n!=0);
	
//Función para mostrar estado de la lista
function mostrarLista($lista,$lon)
{
	for($i=0;$i<$lon-1;$i++)
	{
		echo "$lista[$i] ";
	}
	echo "<br/>";
}