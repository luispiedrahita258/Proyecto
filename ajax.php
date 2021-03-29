<?php
require_once 'config.php';




$action = $_POST['action'];
$conceptos = [];
if(!isset($_SESSION['conceptos'])){
$_SESSION['conceptos'] = [];

}else{
$conceptos = $_SESSION['conceptos'];
}

switch ($action){
    case 'add_concepto':
        $concepto=
        [
            'id'  => rand(111111,999999),
            'concepto'=> $_POST['concepto'],
            'cantidad' => (int) $_POST['cantidad'],
            'precio' => $_POST['precio'],
            'subtotal' => floatval($_POST['cantidad'] * $_POST['precio'])

        ];
        $_SESSION['conceptos'][] = $concepto;

        json_output(json_build(200, 'Concepto agregado con exito'));

        break;

        case 'delete_concepto':
if(!isset($_POST['id'])){
    json_output(json_build(400, 'Concepto no valido'));
}

$id = (int) $_POST['id'];
//Si no hay conceptos
if(!isset($_SESSION['conceptos']) || empty($_SESSION['conceptos'])){
    json_output(json_build(400, 'No hay conceptos en la lista'));
}

 //Si hay conceptos      
 foreach ($_SESSION['conceptos'] as $i => $v){
     if($v['id'] == $id){
         unset($_SESSION['conceptos'][$i]);
         json_output(json_build(200, 'Concepto borrado con exito'));
     }
 };    

 json_output(json_build(400, 'Concepto no valido'));
            
 break;

 case 'get_conceptos':
    $conceptos = load_conceptos();
    $subtotal = 0;
    $impuestos = 0;
    $total = 0;
    
    $output = 
    '<div class="card">
    <div class="card-body">
        <h4 class="card-title">Conceptos actuales</h4>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th class="text-center">Concepto</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-right">Total</th>
                    <th class="text-right">Accion</th>
                </tr>
            </thead>
            <tbody>';

            foreach ($conceptos as $i => $v){
                $output .='
                <tr>
                <td class="text-left">'.$v['concepto'].'</td>
                <td class="text-center">$'.number_format($v['precio'],2).'</td>
                <td class="text-center">'.$v['cantidad'].'</td>
                <td class="text-right">$'.number_format($v['subtotal'],2).'</td>
                <td class="text-right">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-sm btn-success do_get_concepto" data-id="'.$v['id'].'"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger do_delete_concepto" ><i class="fas fa-times"></i></button>
                    </div>
                </td>
            </tr>
                
                ';

                $subtotal += $v['subtotal'];

            };

            $impuestos = (float) $subtotal*0.19;
            $total = $subtotal + $impuestos;
         
              
              $output .= '
                <tr>
                <td colspan="3">Subtotal</td>
                <td colspan="1" class="text-right">$'.number_format($subtotal,2).'</td>
<td></td>
                </tr>
                <tr>
                <td colspan="3">Impuestos</td>
                <td colspan="1" class="text-right">$'.number_format($impuestos,2).'</td>
<td></td>
                </tr>
                <tr>
                <td colspan="3">Total</td>
                <td  colspan="1" class="text-right"><h5><b>$'.number_format($total,2).'</b></h5></td>
<td></td>                                
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
    ';
json_output(json_build(200, 'OK', $output));
    break;

    case 'get_concepto':

        //Cargar un solo concepto

        $id = (int) $_POST['id'];
        $concepto = load_concepto($id);

        if(!$concepto){
            json_output(json_build(400, 'OK', 'Concepto no valido'));
        }


        $output = '<div class="card" id="wrapper-update-concepto-form">
        <div class="card-body">
        
            <h4 class="card-tittle">Actualizar concepto</h4>
            <form action="" id="do_update_concepto">
            <input type= "hidden" id="update_id" value="'.$concepto['id'].'" name="id">
                <div class="form-group row">
                    <div class="col-xl-6">
                        <label for="concepto">Concepto</label>
                        <input type="text" class="form-control" id="update_concepto"
                        value="'.$concepto['concepto'].'" required>

                    </div>
                    <div class="col-xl-3">
                        <label for="concepto">Precio</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control" id="update_precio" value="'.$concepto['precio'].'" required>
                        </div>
                    </div>


                    <div class="col-xl-3">
                        <label for="concepto">Cantidad</label>
                        <input type="number" class="form-control" id="update_cantidad" value="'.$concepto['cantidad'].'" min="1" max="99">

                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                    <button class="btn btn-danger" type="reset" id="cancel-update">Cancelar</button>
                </div>
            </form>
        </div>
    </div>';

        json_output(json_build(200, 'OK', $output));
        break;

        case 'update_concepto':

            $concepto = 
            [
                'id' => $_POST['id'],
                'concepto' => $_POST['concepto'],
                'cantidad' => (int)$_POST['cantidad'],
                'precio' => $_POST['precio'],
                'subtotal' => floatval($_POST['cantidad'] * $_POST['precio'])
            ];

            foreach ($_SESSION['conceptos'] as $i => $v){
                if($v['id'] == $concepto['id']){
                    $_SESSION['conceptos'][$i] = $concepto;
                    json_output(json_build(200, 'Concepto actualizado con exito'));
                }

            }

            
            json_output(json_build(400, 'Concepto no valido'));

        break;

        default:


        break;
}