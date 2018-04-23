<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       Antonio Luis
 * @since      1.0.0
 *
 * @package    Formulario
 * @subpackage Formulario/public/partials
 */
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<?php if(isset($_POST['enviar'])) {
    print_r($_POST) ;
            
    wp_insert_post(
        array(
                    'comment_status'	=>	'closed',
                    'ping_status'		=>	'closed',
                    'post_author'		=>	'antonio l',
                    'post_name'		    =>	'mi primer form',
                    'post_title'		=>	'form-antonio',
                    'post_content'      => json_encode($_POST, JSON_UNESCAPED_UNICODE ),
                    'post_status'		=>	'publish',
                    'post_type'		    =>	'datos_formularios'
        ));
    
    
}else{ ?>




<div id="dialog" style="display: none;">
        <form action="" method="post">
            <h1>Te pediremos unos últimos datos para estar en contacto contigo.</h1>
            <label>Nombre: </label>
            <input type="text" name="nombre" required><br><br>
            <label>Apellidos: </label>
            <input type="text" name="apellidos" required><br><br>
            <label>Telefono: </label>
            <input type="number" name="telefono" required><br><br>
            <label>Correo electrónico: </label>
            <input type="text" name="correo" required><br><br>
            <label>¿Qué estás buscando?</label><br>
            <input type="radio" name="busqueda" value="Mejor precio" checked> Mejor precio<br>
            <input type="radio" name="busqueda" value="Calidad/Precio"> Calidad/Precio<br>
            <input type="radio" name="busqueda" value="Mejor calidad"> Mejor calidad<br><br>
            <label>¿Cuándo quieres realizar el trabajo?</label><br>
            <input type="radio" name="cuando" value="Lo antes posible" checked> Lo antes posible<br>
            <input type="radio" name="cuando" value="De 1 a 3 meses"> De 1 a 3 meses<br>
            <input type="radio" name="cuando" value="Más de 3 meses"> Más de 3 meses<br><br><br>

            

            <input type="hidden" name="presupuesto" id="presupuesto" value="">
            <input type="hidden" name="superficie_vivienda" id="superficie_vivienda" value="">
            <input type="hidden" name="numero_plantas" id="numero_plantas" value="">
            <input type="hidden" name="habitaciones_vivienda" id="habitaciones_vivienda" value="">
            <input type="hidden" name="personas_vivienda" id="personas_viviendas" value="">
            <input type="hidden" name="pago_mensual" id="pago_mensual" value="">
            <input type="hidden" name="consumo_luz" id="consumo_luz" value="">
            <input type="hidden" name="localizacion_provincia" id="localizacion_provincia" value="">
            <input type="hidden" name="cpostal" id="cpostal" value="">
            <input type="hidden" name="direccion" id="direccion" value="">
            <input type="hidden" name="presidente_o_administrador" id="presidente_o_administrador" value="">
            <input type="hidden" name="numero_viviendas" id="numero_viviendas" value="">
            <input type="hidden" name="tipo_contador" id="tipo_contador" value="">
            <input type="hidden" name="superficie_tejado" id="superficie_tejado" value="">
            <input type="hidden" name="posicion_contador" id="posicion_contador" value="">
            <input type="hidden" name="propietario" id="propietario" value="">
            
            <input type="submit" name="enviar" value="Enviar datos">

        </form>
    </div>

    <div class="upform">

        <form action="" method="post" id="formulario">

            <div class="upform-header fixed">Presupuesto placas</div>

            <div class="upform-main">

                <div id="buscar-presupuesto">

                  <div class="input-bloqueo input-block">
                    <div class="numero">1.</div><div class="label with-image"> ¿Para qué buscas presupuesto?</div>
                    <div class="input-control">
                      <input id="vivienda" class="toggle toggle-right" name="presupuesto" value="vivienda" type="radio">
                      <label for="vivienda" class="btn1" id="vivienda-label">Vivienda Unifamiliar</label>
                      <input id="comunidad" class="toggle toggle-left" name="presupuesto" value="comunidad" type="radio">
                      <label for="comunidad" class="btn1" id="comunidad-label">Comunidad de Vecinos</label>
                      <input id="negocio" class="toggle toggle-left" name="presupuesto" value="empresa" type="radio">
                      <label for="negocio" class="btn1" id="negocio-label">Negocio/Empresa</label>
                      <div id="next1"></div>
                      <div id="next2"></div>
                      <div id="next3"></div>
                    </div>
                  </div>

                </div>
                
                <div id="vivienda-unifamiliar" class="hidden" >
                    <br><br><br><br><br>
                    <div class="title">Vivienda Unifamiliar</div>
                    
                    <div class="input-block">
                        <div class="label" >a. ¿Conoces la posición del contador general?</div>
                        <div class="input-control">
                          <input id="q1" class="toggle toggle-left" name="q2" value="si" type="radio">
                          <label for="q1" class="btn1 si">Si</label>
                          <input id="q2" class="toggle toggle-right" name="q2" value="no" type="radio">
                          <label for="q2" class="btn1 si">No</label>
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">b. Superficie de la vivienda</div>
                        <div class="input-control">
                          <input id="q3" class="toggle toggle-left" name="superficie_vivienda" value="menos de 50" type="radio">
                          <label for="q3" class="btn1 superficie">Menos de 50 m2</label>
                          <input id="q4" class="toggle toggle-right" name="superficie_vivienda" value="entre 50 - 100" type="radio">
                          <label for="q4" class="btn1 superficie">Entre 50-100 m2</label>
                          <input id="q5" class="toggle toggle-left" name="superficie_vivienda" value="menos de 50" type="radio">
                          <label for="q5" class="btn1 superficie">Más de 100m2</label>
                          <input id="q6" class="toggle toggle-right" name="superficie_vivienda" value="entre 50 - 100" type="radio">
                          <label for="q6" class="btn1 superficie" >No lo sé</label>
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">c. Número de plantas</div>
                        <div class="input-control">
                          <input id="q7" class="toggle toggle-left" name="numero_plantas" value="1 planta" type="radio">
                          <label for="q7" class="btn"><span>A</span> 1 planta</label>
                          <input id="q8" class="toggle toggle-right" name="numero_plantas" value="2 plantas" type="radio">
                          <label for="q8" class="btn"><span>B</span> 2 Plantas</label>
                          <input id="q9" class="toggle toggle-left" name="numero_plantas" value="Más de 2 plantas" type="radio">
                          <label for="q9" class="btn"><span>C</span> Más de 2 plantas</label>
                          <input id="q10" class="toggle toggle-right" name="numero_plantas" value="No lo sé" type="radio">
                          <label for="q10" class="btn"><span>D</span> No lo sé</label>
                        </div>
                     </div>

                    <div class="input-block">
                    <div class="label">d. ¿Cuántas habitaciones tiene la vivienda?</div>
                        <div class="input-control">
                          <input id="q24" class="toggle toggle-left" name="habitaciones_vivienda" value="1 habitacion" type="radio">
                          <label for="q24" class="btn1 habitaciones">Una</label>
                          <input id="q25" class="toggle toggle-right" name="habitaciones_vivienda" value="2 habitaciones" type="radio">
                          <label for="q25" class="btn1 habitaciones">Dos</label>
                          <input id="q26" class="toggle toggle-left" name="habitaciones_vivienda" value="Más de 2 habitaciones" type="radio">
                          <label for="q26" class="btn1 habitaciones">Más de 2</label>
                          <input id="q11" class="toggle toggle-right" name="habitaciones_vivienda" value="No lo sé" type="radio">
                          <label for="q11" class="btn1 habitaciones">No lo sé</label>
                        </div>
                     </div>

                    <div class="input-block">
                    <div class="label">e. ¿Cuántas personas viven en la vivienda?</div>
                        <div class="input-control">
                          <input id="q12" class="toggle toggle-left" name="personas_vivienda" value="1 persona" type="radio">
                          <label for="q12" class="btn1" id="personas1">1 persona</label>
                          <input id="q13" class="toggle toggle-right" name="personas_vivienda" value="2 personas" type="radio">
                          <label for="q13" class="btn1" id="personas2">2 personas</label>
                          <input id="q14" class="toggle toggle-left" name="personas_vivienda" value="Más de 2 personas" type="radio">
                          <label for="q14" class="btn1" id="personas3">3 personas</label>
                          <input id="q15" class="toggle toggle-right" name="personas_vivienda" value="No lo sé" type="radio">
                          <label for="q15" class="btn1" id="personas4">4 o más personas</label>
                        </div>
                     </div>

                    <div class="input-block">
                    <div class="label">f. ¿Cuánto pagas de luz mensualmente?</div>
                        <div class="input-control">
                          <input id="q16" class="toggle toggle-left" name="pago_mensual" value="menos de 50e" type="radio">
                          <label for="q16" class="btn"><span>A</span> menos de 50€</label>
                          <input id="q17" class="toggle toggle-right" name="pago_mensual" value="entre 50 y 75e" type="radio">
                          <label for="q17" class="btn"><span>B</span> entre 50 y 75€</label>
                          <input id="q18" class="toggle toggle-left" name="pago_mensual" value="entre 100 y 150e" type="radio">
                          <label for="q18" class="btn"><span>C</span> entre 100 y 150€</label>
                          <input id="q19" class="toggle toggle-right" name="pago_mensual" value="mas de 150e" type="radio">
                          <label for="q19" class="btn"><span>D</span> más de 150€</label>
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">g. ¿Cuándo consumes más luz ?</div>
                        <div class="input-control">
                          <input id="q20" class="toggle toggle-left" name="consumo_luz" value="mañana" type="radio">
                          <label for="q20" class="btn1" id="mañana">Por la mañana</label>
                          <input id="q21" class="toggle toggle-right" name="consumo_luz" value="tarde" type="radio">
                          <label for="q21" class="btn1" id="tarde">Por la tarde</label>
                          <input id="q22" class="toggle toggle-left" name="consumo_luz" value="noche" type="radio">
                          <label for="q22" class="btn1" id="noche">Por la noche</label>                         
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">h. Adjunta tu factura de la luz</div>
                        <div class="input-control">
                          <input id="q27" class="toggle toggle-left file-input" name="q9" value="Adjuntar factura" type="file">                                              
                        </div>
                    </div>             
                </div>

                <div id="comunidad-vecinos" class="hidden">
                    <br><br><br><br><br>
                    <div class="title">Comunidad de vecinos</div>

                    <div class="input-block">
                    <div class="label">a. ¿Eres presidente de la comunidad o administrador de fincas?</div>
                        <div class="input-control">
                          <input id="q28" class="toggle toggle-left" name="presidente_o_administrador" value="presidente" type="radio">
                          <label for="q28" class="btn"><span>A</span> Presidente</label>
                          <input id="q29" class="toggle toggle-right" name="presidente_o_administrador" value="administrador" type="radio">
                          <label for="q29" class="btn"><span>B</span> Administrador</label>
                          <input id="q30" class="toggle toggle-right" name="presidente_o_administrador" value="otro" type="radio">
                          <label for="q30" class="btn"><span>C</span> Otro</label>
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">b. ¿Cuánto pagais de luz mensualmente?</div>
                        <div class="input-control">
                          <input id="q31" class="toggle toggle-left" name="pago_mensual" value="menos de 50e" type="radio">
                          <label for="q31" class="btn"><span>A</span> menos de 50€</label>
                          <input id="q32" class="toggle toggle-right" name="pago_mensual" value="entre 50 y 75e" type="radio">
                          <label for="q32" class="btn"><span>B</span> entre 50 y 75€</label>
                          <input id="q33" class="toggle toggle-left" name="pago_mensual" value="entre 100 y 150e" type="radio">
                          <label for="q33" class="btn"><span>C</span> entre 100 y 150€</label>
                          <input id="q34" class="toggle toggle-right" name="pago_mensual" value="mas de 150e" type="radio">
                          <label for="q34" class="btn"><span>D</span> más de 150€</label>
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">c. ¿Cuántas plantas tiene el edificio?</div>
                        <div class="input-control">
                          <input id="q35" class="toggle toggle-left" name="numero_plantas" value="1 planta" type="radio">
                          <label for="q35" class="btn"><span>A</span> 1 planta</label>
                          <input id="q36" class="toggle toggle-right" name="numero_plantas" value="2 plantas" type="radio">
                          <label for="q36" class="btn"><span>B</span> 2 Plantas</label>
                          <input id="q37" class="toggle toggle-left" name="numero_plantas" value="3 plantas" type="radio">
                          <label for="q37" class="btn"><span>C</span> 3 plantas</label>
                          <input id="q38" class="toggle toggle-right" name="numero_plantas" value="Más de 4 plantas" type="radio">
                          <label for="q38" class="btn"><span>D</span> Más de 4 plantas</label>
                        </div>
                     </div>

                    <div class="input-block">
                    <div class="label">d. ¿Cuántas viviendas hay por planta?</div>
                        <div class="input-control">
                          <input id="q39" class="toggle toggle-left" name="numero_viviendas" value="1 vivienda" type="radio">
                          <label for="q39" class="btn"><span>A</span> 1</label>
                          <input id="q40" class="toggle toggle-right" name="numero_viviendas" value="2 viviendas" type="radio">
                          <label for="q40" class="btn"><span>B</span> 2</label>
                          <input id="q41" class="toggle toggle-left" name="numero_viviendas" value="Más de 2 viviendas" type="radio">
                          <label for="q41" class="btn"><span>C</span> Más de 2</label>
                          <input id="q42" class="toggle toggle-right" name="numero_viviendas" value="No lo sé" type="radio">
                          <label for="q42" class="btn"><span>D</span> No lo sé</label>
                        </div>
                     </div>

                    <div class="input-block">
                    <div class="label">e. ¿Conoces la posicion del contador?</div>
                        <div class="input-control">
                          <input id="q43" class="toggle toggle-left" name="q13" value="si" type="radio">
                          <label for="q43" class="btn"><span>A</span> Si</label>
                          <input id="q44" class="toggle toggle-right" name="q13" value="no" type="radio">
                          <label for="q44" class="btn"><span>B</span> No</label>
                        </div>
                     </div>

                    <div class="input-block">
                    <div class="label">¿Donde se encuentra?</div>
                        <div class="input-control">
                            <input id="49" type="text" name="posicion_contador" autocomplete="off">                         
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">f. ¿Cuánto pagas de luz mensualmente?</div>
                        <div class="input-control">
                          <input id="q45" class="toggle toggle-left" name="pago_mensual" value="menos de 50e" type="radio">
                          <label for="q45" class="btn"><span>A</span> menos de 50€</label>
                          <input id="q46" class="toggle toggle-right" name="pago_mensual" value="entre 50 y 75e" type="radio">
                          <label for="q46" class="btn"><span>B</span> entre 50 y 75€</label>
                          <input id="q47" class="toggle toggle-left" name="pago_mensual" value="entre 100 y 150e" type="radio">
                          <label for="q47" class="btn"><span>C</span> entre 100 y 150€</label>
                          <input id="q48" class="toggle toggle-right" name="pago_mensual" value="mas de 150e" type="radio">
                          <label for="q48" class="btn"><span>D</span> más de 150€</label>
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">g. ¿Qué tipo de contador es?</div>
                    <div class="input-control">
                          <input id="q50" class="toggle toggle-left" name="tipo_contador" value="monofasico" type="radio">
                          <label for="q50" class="btn"><span>A</span> Monofásico</label>
                          <input id="q51" class="toggle toggle-right" name="tipo_contador" value="trifasico" type="radio">
                          <label for="q51" class="btn"><span>B</span> Trifásico</label>
                          <input id="q52" class="toggle toggle-right" name="tipo_contador" value="otro" type="radio">
                          <label for="q52" class="btn"><span>C</span> Otro</label>
                        </div>                        
                    </div>

                    <div class="input-block">
                    <div class="label">h. ¿Cuentas con la aprobación de la Junta de Vecinos?</div>
                        <div class="input-control">
                          <input id="q53" class="toggle toggle-left" name="q16" value="si" type="radio">
                          <label for="q53" class="btn"><span>A</span> Si</label>
                          <input id="q54" class="toggle toggle-right" name="q16" value="no" type="radio">
                          <label for="q54" class="btn"><span>B</span> No</label>
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">i. Adjunta tu factura de la luz</div>
                        <div class="input-control">
                          <input id="q55" class="toggle toggle-left file-input" name="q17" value="Adjuntar factura" type="file">                                                                   
                        </div>
                    </div>              
                </div>

                <div id="negocio-empresa" class="hidden">
                    <br><br><br><br><br>
                    <div class="title">Negocio/Empresa</div>

                    <div class="input-block">
                    <div class="label">a. ¿Eres el propietario del negocio o empresa?</div>
                        <div class="input-control">
                          <input id="q56" class="toggle toggle-left" name="propietario" value="si" type="radio">
                          <label for="q56" class="btn"><span>A</span> Si</label>
                          <input id="q57" class="toggle toggle-right" name="propietario" value="no" type="radio">
                          <label for="q57" class="btn"><span>B</span> No</label>
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">b. ¿Tiene autorización del propietario para solicitar presupuesto?</div>
                        <div class="input-control">
                          <input id="q58" class="toggle toggle-left" name="q19" value="si" type="radio">
                          <label for="q58" class="btn"><span>A</span> Si</label>
                          <input id="q59" class="toggle toggle-right" name="q19" value="no" type="radio">
                          <label for="q59" class="btn"><span>B</span> No</label>
                        </div>
                    </div>
                    


                    
                    <div class="input-block">
                    <div class="label">c. Superficie del tejado</div>
                        <div class="input-control">
                          <input id="q60" class="toggle toggle-left" name="superficie_tejado" value="menos de 200m" type="radio">
                          <label for="q60" class="btn1 superficie">Menos de 200 m2</label>
                          <input id="q61" class="toggle toggle-right" name="superficie_tejado" value="entre 200 y 500m" type="radio">
                          <label for="q61" class="btn1 superficie">Entre 200 y 500 m2</label>
                          <input id="q62" class="toggle toggle-left" name="superficie_tejado" value="mas de 500m" type="radio">
                          <label for="q62" class="btn1 superficie">Más de 500 m2</label>
                          <input id="q63" class="toggle toggle-right" name="superficie_tejado" value="no se" type="radio">
                          <label for="q63" class="btn1 superficie">No lo se</label>
                        </div>
                     </div>

                    <div class="input-block">
                    <div class="label">d. ¿Cuánto pagas de luz mensualmente?</div>
                      <div class="input-control">
                            <input type="text" name="pago_mensual" autocomplete="off">                         
                        </div>
                     </div>
                                                        
                    <div class="input-block">
                    <div class="label">e. Adjunta tu factura de la luz</div>
                        <div class="input-control">
                          <input id="q64" class="toggle toggle-left" name="q21" value="Adjuntar factura" type="file">                     
                        </div>
                    </div>                    
                </div>
                
                <div id="localizacion" class="hidden">
                    <div class="title">Localización</div>

                    <div class="input-block">
                    <div class="label">a. Provincia</div>
                        <div class="input-control">
                          <input type="text" name="localizacion_provincia" list="lista-provincias" required>
                          <datalist id="lista-provincias"></datalist>                       
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">b. Código postal y población</div>
                        <div class="input-control">
                          <input type="text" name="cpostal" autocomplete="off" required >                       
                        </div>
                    </div>

                    <div class="input-block">
                    <div class="label">c. Dirección (calle, número, portal)</div>
                        <div class="input-control">
                          <input type="text" name="direccion" autocomplete="off" required >                        
                        </div>
                    </div>

                    <div class="upform-footer">
                        <input type="submit" name="enviar" id="validar" value="Validar formulario">
                    </div> 
                </div>
                
            </div>    

        </form>

    </div>

    <?php } ?>



<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>






