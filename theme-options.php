<?php

add_action('admin_menu', 'simulador_salarial');

function simulador_salarial() {

	add_menu_page('Ajustes Simulador Salarial', 'Ajustes Simulador Salarial', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , plugins_url('/images/icon.png', __FILE__) );

	add_action( 'admin_init', 'registrar_simulador_salarial' );
}


function registrar_simulador_salarial() {
	//register our settings
	register_setting( 'simulador_salarial-settings-group', 'pt1' );
	register_setting( 'simulador_salarial-settings-group', 'pt2' );
	register_setting( 'simulador_salarial-settings-group', 'pt3' );
	register_setting( 'simulador_salarial-settings-group', 'pa1' );
	register_setting( 'simulador_salarial-settings-group', 'pa2' );
	register_setting( 'simulador_salarial-settings-group', 'pa3' );
	register_setting( 'simulador_salarial-settings-group', 'pad1' );
	register_setting( 'simulador_salarial-settings-group', 'pad2' );
	register_setting( 'simulador_salarial-settings-group', 'pad4' );
	register_setting( 'simulador_salarial-settings-group', 'jtp1' );
	register_setting( 'simulador_salarial-settings-group', 'jtp2' );
	register_setting( 'simulador_salarial-settings-group', 'jtp3' );
	register_setting( 'simulador_salarial-settings-group', 'ay11' );
	register_setting( 'simulador_salarial-settings-group', 'ay12' );
	register_setting( 'simulador_salarial-settings-group', 'ay13' );
	register_setting( 'simulador_salarial-settings-group', 'ay2' );
	register_setting( 'simulador_salarial-settings-group', 'apt1' );
	register_setting( 'simulador_salarial-settings-group', 'apt2' );
	register_setting( 'simulador_salarial-settings-group', 'apt3' );
	register_setting( 'simulador_salarial-settings-group', 'apa1' );
	register_setting( 'simulador_salarial-settings-group', 'apa2' );
	register_setting( 'simulador_salarial-settings-group', 'apa3' );
	register_setting( 'simulador_salarial-settings-group', 'apad1' );
	register_setting( 'simulador_salarial-settings-group', 'apad2' );
	register_setting( 'simulador_salarial-settings-group', 'apad4' );
	register_setting( 'simulador_salarial-settings-group', 'ajtp1' );
	register_setting( 'simulador_salarial-settings-group', 'ajtp2' );
	register_setting( 'simulador_salarial-settings-group', 'ajtp3' );
	register_setting( 'simulador_salarial-settings-group', 'aay11' );
	register_setting( 'simulador_salarial-settings-group', 'aay12' );
	register_setting( 'simulador_salarial-settings-group', 'aay13' );
	register_setting( 'simulador_salarial-settings-group', 'aay2' );
	register_setting( 'simulador_salarial-settings-group', 'prestaciones' );
	register_setting( 'simulador_salarial-settings-group', 'garantia' );
	register_setting( 'simulador_salarial-settings-group', 'segurodevida' );
	register_setting( 'simulador_salarial-settings-group', 'pdf' );
	register_setting( 'simulador_salarial-settings-group', 'espe' );
	register_setting( 'simulador_salarial-settings-group', 'doctorado' );
	register_setting( 'simulador_salarial-settings-group', 'maestria' );
    register_setting( 'simulador_salarial-settings-group', 'gsimple' );
    register_setting( 'simulador_salarial-settings-group', 'gsemi' );
    register_setting( 'simulador_salarial-settings-group', 'gexclusiva' );

}

function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>Ajustes de Variables Simulador Salarial</h1>

<form method="post" action="">
    <?php settings_fields( 'simulador_salarial-settings-group' ); ?>
    <?php do_settings_sections( 'simulador_salarial-settings-group' ); ?>
    <table class="form-table">

        <tr valign="top">
        <td width="300px">
        <h2>Sueldos Básicos</h2>
        </td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Profesor Titular</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="pt1" value="<?php echo esc_attr( get_option('pt1') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="pt2" value="<?php echo esc_attr( get_option('pt2') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="pt3" value="<?php echo esc_attr( get_option('pt3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Profesor Asociado</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="pa1" value="<?php echo esc_attr( get_option('pa1') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="pa2" value="<?php echo esc_attr( get_option('pa2') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="pa3" value="<?php echo esc_attr( get_option('pa3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Profesor Adjunto</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="pad1" value="<?php echo esc_attr( get_option('pad1') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="pad2" value="<?php echo esc_attr( get_option('pad2') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="pad3" value="<?php echo esc_attr( get_option('pad3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Jefe de Trabajos Prácticos</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="jtp1" value="<?php echo esc_attr( get_option('jtp1') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="jtp2" value="<?php echo esc_attr( get_option('jtp2') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="jtp3" value="<?php echo esc_attr( get_option('jtp3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Ayudante de Primera</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="ay11" value="<?php echo esc_attr( get_option('ay11') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="ay12" value="<?php echo esc_attr( get_option('ay12') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="ay13" value="<?php echo esc_attr( get_option('ay13') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <td>
        <h3>Ayudante de Segunda</h3>
        </td>
        </tr>
     
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="ay2" value="<?php echo esc_attr( get_option('ay2') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Adicional por Título</h3>
        </td>
        </tr>
     
        <tr valign="top">
        <th scope="row">Doctorado</th>
        <td><input type="text" name="doctorado" value="<?php echo esc_attr( get_option('doctorado') ); ?>" /> %</td>
        </tr>

        <tr valign="top">
        <th scope="row">Maestria</th>
        <td><input type="text" name="maestria" value="<?php echo esc_attr( get_option('maestria') ); ?>" /> %</td>
        </tr>

        <tr valign="top">
        <th scope="row">Carrera Especialización</th>
        <td><input type="text" name="espe" value="<?php echo esc_attr( get_option('espe') ); ?>" /> %</td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Adicional no Remunerativo</h3>
        </td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Profesor Titular</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="apt1" value="<?php echo esc_attr( get_option('apt1') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="apt2" value="<?php echo esc_attr( get_option('apt2') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="apt3" value="<?php echo esc_attr( get_option('apt3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Profesor Asociado</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="apa1" value="<?php echo esc_attr( get_option('apa1') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="apa2" value="<?php echo esc_attr( get_option('apa2') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="apa3" value="<?php echo esc_attr( get_option('apa3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Profesor Adjunto</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="apad1" value="<?php echo esc_attr( get_option('apad1') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="apad2" value="<?php echo esc_attr( get_option('apad2') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="apad3" value="<?php echo esc_attr( get_option('apad3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Jefe de Trabajos Prácticos</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="ajtp1" value="<?php echo esc_attr( get_option('ajtp1') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="ajtp2" value="<?php echo esc_attr( get_option('ajtp2') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="ajtp3" value="<?php echo esc_attr( get_option('ajtp3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Ayudante de Primera</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="aay11" value="<?php echo esc_attr( get_option('aay11') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-Exclusiva</th>
        <td>$ <input type="text" name="aay12" value="<?php echo esc_attr( get_option('aay12') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="aay13" value="<?php echo esc_attr( get_option('aay13') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <td>
        <h3>Ayudante de Segunda</h3>
        </td>
        </tr>
     
        <tr valign="top">
        <th scope="row">Parc/Simple</th>
        <td>$ <input type="text" name="aay2" value="<?php echo esc_attr( get_option('aay2') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>DOSUBA</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Garantía Aporte Mínimo (207)</th>
        <td>$ <input type="text" name="garantia" value="<?php echo esc_attr( get_option('garantia') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Prestaciones Alto Costo/Baja Incidencia (214)</th>
        <td>$ <input type="text" name="prestaciones" value="<?php echo esc_attr( get_option('prestaciones') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <td>
        <h3>Seguro de Vida</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Seguro de Vida (234)</th>
        <td>$ <input type="text" name="segurodevida" value="<?php echo esc_attr( get_option('segurodevida') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Garantía Salarial</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Simple</th>
        <td>$ <input type="text" name="gsimple" value="<?php echo esc_attr( get_option('gsimple') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Semi-exclusiva</th>
        <td>$ <input type="text" name="gsemi" value="<?php echo esc_attr( get_option('gsemi') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Exclusiva</th>
        <td>$ <input type="text" name="gexclusiva" value="<?php echo esc_attr( get_option('gexclusiva') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td>
        <h3>Link al PDF</h3>
        </td>
        </tr>

        <tr valign="top">
        <th scope="row">Copie y pegue aqui el link a la grilla salarial vigente</th>
        <td><input style="width:400px" type="text" name="pdf" value="<?php echo esc_attr( get_option('pdf') ); ?>" /></td>
        </tr>

     
   

    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php }
 if (isset($_POST['submit'])){
 	if(isset($_POST['pt1'])){
 	update_option('pt1',$_POST['pt1']);
	}
	if(isset($_POST['pt2'])){
		update_option('pt2',$_POST['pt2']);
	}
	if(isset($_POST['pt3'])){
		update_option('pt3',$_POST['pt3']);
	}
	if(isset($_POST['pa1'])){
		update_option('pa1',$_POST['pa1']);
	}
	if(isset($_POST['pa2'])){
		update_option('pa2',$_POST['pa2']);
	}
	if(isset($_POST['pa3'])){
		update_option('pa3',$_POST['pa3']);
	}
	if(isset($_POST['pad1'])){
		update_option('pad1',$_POST['pad1']);
	}
	if(isset($_POST['pad2'])){
		update_option('pad2',$_POST['pad2']);
	}
	if(isset($_POST['pad3'])){
		update_option('pad3',$_POST['pad3']);
	}
	if(isset($_POST['jtp1'])){
		update_option('jtp1',$_POST['jtp1']);
	}
	if(isset($_POST['jtp2'])){
		update_option('jtp2',$_POST['jtp2']);
	}
	if(isset($_POST['jtp3'])){
		update_option('jtp3',$_POST['jtp3']);
	}
	if(isset($_POST['ay11'])){
		update_option('ay11',$_POST['ay11']);
	}
	if(isset($_POST['ay12'])){
		update_option('ay12',$_POST['ay12']);
	}
	if(isset($_POST['ay13'])){
		update_option('ay13',$_POST['ay13']);
	}
	if(isset($_POST['ay2'])){
		update_option('ay2',$_POST['ay2']);
	}
 	if(isset($_POST['apt1'])){
 		update_option('apt1',$_POST['apt1']);
	}
	if(isset($_POST['apt2'])){
		update_option('apt2',$_POST['apt2']);
	}
 	if(isset($_POST['apt3'])){
 		update_option('apt3',$_POST['apt3']);
 	}
 	if(isset($_POST['apa1'])){
	 	update_option('apa1',$_POST['apa1']);
	}
	if(isset($_POST['apa2'])){
		update_option('apa2',$_POST['apa2']);
	}
	if(isset($_POST['apa3'])){
		update_option('apa3',$_POST['apa3']);
	}
	if(isset($_POST['apad1'])){
		update_option('apad1',$_POST['apad1']);
	}
	if(isset($_POST['apad2'])){
		update_option('apad2',$_POST['apad2']);
	}
	if(isset($_POST['apad3'])){
		update_option('apad3',$_POST['apad3']);
	}
	if(isset($_POST['ajtp1'])){
		update_option('ajtp1',$_POST['ajtp1']);
	}
	if(isset($_POST['ajtp2'])){
		update_option('ajtp2',$_POST['ajtp2']);
	}
	if(isset($_POST['ajtp3'])){
		update_option('ajtp3',$_POST['ajtp3']);
	}
	if(isset($_POST['aay11'])){
		update_option('aay11',$_POST['aay11']);
	}
	if(isset($_POST['aay12'])){
		update_option('aay12',$_POST['aay12']);
	}
	if(isset($_POST['aay13'])){
		update_option('aay13',$_POST['aay13']);
	}
	if(isset($_POST['aay2'])){
		update_option('aay2',$_POST['aay2']);
	}
	if(isset($_POST['segurodevida'])){
		update_option('segurodevida',$_POST['segurodevida']);
	}
	if(isset($_POST['prestaciones'])){
		update_option('prestaciones',$_POST['prestaciones']);
	}
	if(isset($_POST['garantia'])){
		update_option('garantia',$_POST['garantia']);
	}
 	if(isset($_POST['pdf'])){
 		update_option('pdf',$_POST['pdf']);
 	}
 	if(isset($_POST['espe'])){
 		update_option('espe',$_POST['espe']);
 	}
 	if(isset($_POST['doctorado'])){
 		update_option('doctorado',$_POST['doctorado']);
 	}
 	if(isset($_POST['maestria'])){
 		update_option('maestria',$_POST['maestria']);
 	}
    if(isset($_POST['gsimple'])){
        update_option('gsimple',$_POST['gsimple']);
    }
    if(isset($_POST['gsemi'])){
        update_option('gsemi',$_POST['gsemi']);
    }
    if(isset($_POST['gexclusiva'])){
        update_option('gexclusiva',$_POST['gexclusiva']);
    }

} ?>
