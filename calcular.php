<?php 
if(isset($_POST["btncalcular"])){

    require_once 'bit.php';
    require_once 'byte.php';
    require_once 'kilobyte.php';
    require_once 'megabyte.php';
    require_once 'gigabyte.php';
    require_once 'terabyte.php';

    $bit = new bit();
    $byte = new byte();
    $kilobyte = new kilobyte();
    $megabyte = new megabyte();
    $gigabyte = new gigabyte();
    $terabyte = new terabyte();

    $valor = $_POST["txtvalor"];

    $tipomedida = $_POST["selmedidas"];
    $opcion = $_POST["medidas"];

    switch($opcion){

        case "bit":
            $bit->setValor($valor);
            switch($tipomedida){
                
               

               case "byte":
                    echo "La conversión de bit a byte es " . $bit->calcularbytesAbits();
                break;

               case "kilobyte":
                    echo "La conversión de bit a kilobyte es " . $bit->calcularkilobytesAbits();
                break;

                case "megabyte":
                    echo "La conversión de bit a megabyte es " . $bit->calcularmegabytesAbits();
                break;

                case "gigabyte":
                    echo "La conversión de bit a gigabyte es " . $bit->calculargigabytesAbits();
                break;

                case "terabyte":
                    echo "La conversión de bit a terabyte es " . $bit->calcularterabytesAbits();
                break;


                default:
                    echo "Imposible calcular";

            }

        break;

        case "byte":  //unidad de destino
            $byte->setValor($valor);

            switch($tipomedida){  //unidad de origen
                
                case "bit":
                    echo "La conversión de bit a bytes es " . $byte->calcularbitsAbytes();
                break;

               case "kilobyte":
                    echo "La conversión de kilobytes a bytes es " . $byte->calcularkilobytesAbytes();
                break;

               case "gigabyte":
                    echo "La conversión de gigabytes a bytes es " . $byte->calculargigabytesAbytes();
                break;

                case "megabyte":
                    echo "La conversión de megabytes a bytes es " . $byte->calcularmegabytesAbytes();
                break;

                case "terabyte":
                    echo "La conversión de terabytes a bytes es " . $byte->calcularterabytesAbytes();
                break;
        
        
        
                default:
                    echo "Imposible calcular";
            }

        break;

            case "kilobyte":  //unidad de destino

                $kilobyte->setValor($valor);

                switch($tipomedida){  //unidad de origen
                    
                   
                case "bit":
                    echo "La conversión de bits a kilobytes es " . $kilobyte->calcularbitsAkilobytes();
                break;

               case "byte":
                    echo "La conversión de byte a kilobytes es " . $kilobyte->calcularbytesAkilobytes();
                break;

               case "gigabyte":
                    echo "La conversión de gigabytes a kilobytes es " . $kilobyte->calculargigabytesAkilobytes();
                break;

                case "megabyte":
                    echo "La conversión de megabytes a kilobytes es " . $kilobyte->calcularmegabytesAkilobytes();
                break;

                case "terabyte":
                    echo "La conversión de terabytes a kilobytes es " . $kilobyte->calcularterabytesAkilobytes();
                break;


                    default:
                    echo "Imposible calcular";
            }


            break;



           
            case "terabyte":  //unidad de destino

               
                $terabyte->setValor($valor);

                switch($tipomedida){  //unidad de origen
                    
                    case "bit":
                        echo "La conversión de bits a terabytes es " . $terabyte->calcularbitsAterabytes();
                    break;
    
                   case "kilobyte":
                        echo "La conversión de kilobytes a terabytes es " . $terabyte->calcularkilobytesAterabytes();
                    break;
    
                   case "byte":
                        echo "La conversión de bytes a terabytes es " . $terabyte->calcularbytesAterabytes();
                    break;
    
                    
    
                    case "megabyte":
                        echo "La conversión de megabytes a terabytes es " . $terabyte->calcularmegabytesAterabytes();
                    break;

                    case "gigabyte":
                        echo "La conversión de gigabytes a terabytes es " . $terabyte->calculargigabytesAterabytes();

                    break;

                        default:
                        echo "Imposible calcular";
                }
    
                
                
                    break;
            

        

        

     
    
    case "megabyte":  //unidad de destino

               
        $megabyte->setValor($valor);

        switch($tipomedida){  //unidad de origen
            
            case "bit":
                echo "La conversión de bits a megabytes es " . $megabyte->calcularbitsAmegabytes();
            break;

           case "kilobyte":
                echo "La conversión de kilobytes a megabytes es " . $megabyte->calcularkilobytesAmegabytes();
            break;

           case "byte":
                echo "La conversión de bytes a megabytes es " . $megabyte->calcularbytesAmegabytes();
            break;

            

            case "terabyte":
                echo "La conversión de terabytes a megabytes es " . $megabyte->calcularterabytesAmegabytes();
            break;

            case "gigabyte":
                echo "La conversión de gigabytes a megabytes es " . $megabyte->calculargigabytesAmegabytes();
            break;

                default:
                echo "Imposible calcular";
        }



            break;
    






case "gigabyte":  //unidad de destino

               
    $gigabyte->setValor($valor);

    switch($tipomedida){  //unidad de origen
        
        case "bit":
            echo "La conversión de bits a gigabytes es " . $gigabyte->calcularbitsAgigabytes();
        break;

       case "kilobyte":
            echo "La conversión de kilobytes a gigabytes es " . $gigabyte->calcularkilobytesAgigabytes();
        break;

       case "byte":
            echo "La conversión de bytes a gigabytes es " . $gigabyte->calcularbytesAgigabytes();
        break;

        

        case "megabyte":
            echo "La conversión de megabytes a gigabytes es " . $gigabyte->calcularmegabytesAgigabytes();
        break;

        case "terabyte":
            echo "La conversión de terabytes a gigabytes es " . $gigabyte->calcularterabytesAgigabytes();
        break;

            default:
            echo "Imposible calcular";
    }

        
        break;


        default:
        echo "opción incorrecta";
}



    

}else{
    echo "Acceso no permitido.";
}

    
?>