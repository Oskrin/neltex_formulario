<?php include('../menu/index.php'); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		
		<link rel="shortcut icon" href="../../dist/images/logo.fw.png">
		<title>Inicio - <?php empresa(); ?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="../../dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../dist/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../../dist/css/chosen.min.css" />		
		<link rel="stylesheet" href="../../dist/css/ui.jqgrid.min.css" />
		<link rel="stylesheet" href="../../dist/css/style.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../../dist/css/fontdc.css" />

		<link rel="stylesheet" href="../../dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link type="text/css" rel="stylesheet" id="ace-skins-stylesheet" href="../../dist/css/ace-skins.min.css">
        <link type="text/css" rel="stylesheet" id="ace-rtl-stylesheet" href="../../dist/css/ace-rtl.min.css">
        <script src="../../dist/js/ace-extra.min.js"></script>
    </head>

    <body class="skin-2 ">
		<?php menu_arriba(); ?>
		<div class="main-container" id="main-container">
			<?php menu_lateral(); ?>
			
			 <div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="../inicio/">Inicio</a>
                            </li>
                            <li class="active">Formulario SRI</li>
                            <li class="active">Formulario 101</li>
                        </ul>
                    </div>
					<div class="page-content">
						<div class="row">
							<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">Formulario 101</h4>
									</div>
									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">
												<div>
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">Datos Informativos</span>
														</li>

														<li data-step="2">
															<span class="step">2</span>
															<span class="title">DECLARACION</span>
														</li>

														<li data-step="3">
															<span class="step">3</span>
															<span class="title">DECLARACION</span>
														</li>

														<li data-step="4">
															<span class="step">4</span>
															<span class="title">DECLARACION</span>
														</li>

													</ul>
												</div>

												<hr />

												<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">Datos Aspirante</h3>														
														<form class="form-horizontal " id="validation-form" method="get">
															<div class="row">
																<div class="col-xs-12 col-sm-6">
																	<div class="profile-user-info">
																		<div class="profile-info-row">
																			<div class="profile-info-name"> Nombres: </div>

																			<div class="profile-info-value">
																				<span id="nombres"></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Apellidos: </div>

																			<div class="profile-info-value">
																				<span id="apellidos"></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Identificación: </div>

																			<div class="profile-info-value">
																				<span id="identificacion"></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Teléfono: </div>

																			<div class="profile-info-value">
																				<span id="telefono"></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Celular: </div>

																			<div class="profile-info-value">
																				<span id="celular"></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Correo:</div>

																			<div class="profile-info-value">
																				<span id="correo"></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Dirección: </div>

																			<div class="profile-info-value">
																				<i class="fa fa-map-marker light-orange bigger-110"></i>
																				<span id="direccion"></span>
																			</div>
																		</div>
																	</div>
																</div>	
															</div>										                           
														</form>															
													</div>

													<div class="step-pane" data-step="2">														
														<form class="form-horizontal" id="validation-form-2" method="post">
															<div class="row">
																<div class="col-xs-12">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="311">Efectivo y Equivalentes al efectivo:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="311" id="311" placeholder="311" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="316">No Relacionados/Locales:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="316" id="316" placeholder="316" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="322">(-) Provicion incobrables y deterioro:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="322" id="322" placeholder="322" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="323">Credito tributario a favor del sujeto pasivo:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="323" id="323" placeholder="323" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="326">Inventario de materia prima:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="326" id="326" placeholder="326" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="327">Inventario de productos en proceso:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="327" id="327" placeholder="327" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="328">Inventario de suministros y materiales:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="328" id="328" placeholder="328" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="329">Inventario de prod terminados:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="329" id="329" placeholder="329" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="335">Inventario repuestos herramientas y accesorios:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="335" id="335" placeholder="335" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="345">TOTAL ACTIVOS CORRIENTES:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="345" id="345" placeholder="345" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="353">Muebles y enseres:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="353" id="353" placeholder="353" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="354">Maquinaria equipo e instalaciones:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="354" id="354" placeholder="354" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="356">Equipo de computacion y software:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="356" id="356" placeholder="356" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="357">Vehiculos, equipo debtransporte y caminero:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="357" id="357" placeholder="357" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="359">Otras propiedades:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="359" id="359" placeholder="359" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="360">Depreciciacion acumulada:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="360" id="360" placeholder="360" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="379">TOTAL PROPIEDADES:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="379" id="379" placeholder="379" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="382">Marcas, patentes, otros similares:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="382" id="382" placeholder="382" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="389">TOTAL ACTIVOS INTANGIBLES:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="389" id="389" placeholder="389" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="445">Otros activos no corrientes:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="445" id="445" placeholder="445" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="498">TOTAL ACTIVOS NO CORRIENTES:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="498" id="498" placeholder="498" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="499">TOTAL DEL ACTIVO:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="499" id="499" placeholder="499" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="513">No relacionados/Locales:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="513" id="513" placeholder="513" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="515">Locales:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="515" id="515" placeholder="515" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="517">517:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="517" id="517" placeholder="517" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="521">521:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="521" id="521" placeholder="521" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="526">526:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="526" id="526" placeholder="526" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="527">527:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="527" id="527" placeholder="527" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="528">528:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="528" id="528" placeholder="528" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="530">530:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="530" id="530" placeholder="530" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="534">534:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="534" id="534" placeholder="534" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="539">539:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="539" id="539" placeholder="539" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="545">545:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="545" id="545" placeholder="545" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="551">551:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="551" id="551" placeholder="551" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="569">569:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="569" id="569" placeholder="569" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="601">601:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="601" id="601" placeholder="601" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="621">621:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="621" id="621" placeholder="621" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="641">641:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="641" id="641" placeholder="641" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="651">651:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="651" id="651" placeholder="651" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="652">652:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="652" id="652" placeholder="652" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="653">653:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="653" id="653" placeholder="653" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="661">661:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="661" id="661" placeholder="661" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="698">698:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="698" id="698" placeholder="698" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="699">699:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="699" id="699" placeholder="699" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
										                        </div>	
															</div>
														</form>
													</div>

													<div class="step-pane" data-step="3">
														<form class="form-horizontal " id="validation-form-3" method="get">
															<div class="row">
																<div class="col-xs-12">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="6011">6011:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="6011" id="6011" placeholder="6011" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="6061">6061:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="6061" id="6061" placeholder="6061" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="6071">6071:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="6071" id="6071" placeholder="6071" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="6999">6999:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="6999" id="6999" placeholder="6999" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7051">7051:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7051" id="7051"  placeholder="7051" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7061">7061:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7061" id="7061" placeholder="7061" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7071">7071:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7071" id="7071" placeholder="7071" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7081">7081:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7081" id="7081" placeholder="7081" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7091">7091:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7091" id="7091" placeholder="7091" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7101">7101:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7101" id="7101" placeholder="7101" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7111">7111:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7111" id="7111" placeholder="7111" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7121">7121:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7121" id="7121"  placeholder="7121" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">contituyen materia gravada del IESS:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7131" id="7131" placeholder="7131" />
																							<input type="text" name="7132" id="7132" placeholder="7132" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">que no contituyen materia gravada del IESS:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7141" id="7141" placeholder="7141" />
																							<input type="text" name="7142" id="7142" placeholder="7142" />
																							<input type="text" name="7143" id="7143" placeholder="7143" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7151:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7151" id="7151" placeholder="7151" />
																							<input type="text" name="7152" id="7152" placeholder="7152" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7162:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7162" id="7162" placeholder="7162" />
																							<input type="text" name="7163" id="7163" placeholder="7163" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7191:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7191" id="7191" placeholder="7191" />
																							<input type="text" name="7192" id="7192" placeholder="7192" />
																							<input type="text" name="7193" id="7193" placeholder="7193" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7201:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7201" id="7201" placeholder="7201" />
																							<input type="text" name="7202" id="7202" placeholder="7202" />
																							<input type="text" name="7203" id="7203" placeholder="7203" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7212:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7212" id="7212" placeholder="7212" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7201:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7221" id="7221" placeholder="7221" />
																							<input type="text" name="7222" id="7222" placeholder="7222" />
																							<input type="text" name="7223" id="7223" placeholder="7223" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7232:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7232" id="7232" placeholder="7232" />
																							<input type="text" name="7233" id="7233" placeholder="7233" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7342:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7342" id="7342" placeholder="7342" />
																							<input type="text" name="7343" id="7343" placeholder="7343" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7442:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7442" id="7442" placeholder="7442" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7462:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7462" id="7462" placeholder="7462" />
																							<input type="text" name="7463" id="7463" placeholder="7463" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7472:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7472" id="7472" placeholder="7472" />
																							<input type="text" name="7473" id="7473" placeholder="7473" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7482:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7482" id="7482" placeholder="7482" />
																							<input type="text" name="7483" id="7483" placeholder="7483" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7511:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7511" id="7511" placeholder="7511" />
																							<input type="text" name="7512" id="7512" placeholder="7512" />
																							<input type="text" name="7513" id="7513" placeholder="7513" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7571:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7571" id="7571" placeholder="7571" />
																							<input type="text" name="7572" id="7572" placeholder="7572" />
																							<input type="text" name="7573" id="7573" placeholder="7573" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7581:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7581" id="7581" placeholder="7581" />
																							<input type="text" name="7582" id="7582" placeholder="7582" />
																							<input type="text" name="7583" id="7583" placeholder="7583" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="">7592:</label>
																					<div class="col-xs-12 col-sm-8">
																						<div class="clearfix">
																							<input type="text" name="7592" id="7592" placeholder="7592" />
																							<input type="text" name="7593" id="7593" placeholder="7593" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="6011">7991:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7991" id="7991"  placeholder="7991"/>
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7992">7992:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7992" id="7992" placeholder="7992" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="7999">7999:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="7999" id="7999" placeholder="7999" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>		
														</form>
													</div>

													<div class="step-pane" data-step="4">
														<form class="form-horizontal " id="validation-form-4" method="get">
															<div class="row">
																<div class="col-xs-12">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="379">FORMA DE PAGO:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="379" id="379" placeholder="379" />
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="col-md-3">
																				<div class="form-group">
																					<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="382">BANCO:</label>
																					<div class="col-xs-12 col-sm-6">
																						<div class="clearfix">
																							<input type="text" name="382" id="382" placeholder="382" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="center">
																			<button type="button" class="btn btn-primary" id="btn_0">
																				<i class="ace-icon fa fa-floppy-o bigger-120 white"></i>
																				Grabar Formulario
																			</button>
																			<button type="button" id="btn_1" class="btn btn-primary">
																				<i class="ace-icon fa fa-file-o bigger-120 white"></i>
																				Imprimir
																			</button>
																			<button type="button" id="btn_2" class="btn btn-primary">
																				<i class="ace-icon fa fa-refresh bigger-120 white"></i>
																				Actualizar
																			</button>														
																			<button data-toggle="modal" href="#myModal" type="button" id="btn_3" class="btn btn-primary">
																				<i class="ace-icon fa fa-search bigger-120 white"></i>
																				Buscar
																			</button>
																			<button type="button" id="btn_4" class="btn btn-primary">
																				<i class="ace-icon fa fa-arrow-circle-left bigger-120 white"></i>
																				Atras
																			</button>
																			<button type="button" id="btn_5" class="btn btn-primary">
																				<i class="ace-icon fa fa fa-arrow-circle-right bigger-120 white"></i>
																				Adelante
																			</button>
																		</div>
																	</div>	
										                        </div>	
															</div>	
														</form>
													</div>

												</div>
											</div>

											<hr />
											<div class="wizard-actions">
												<button class="btn btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Atras
												</button>

												<button class="btn btn-success btn-next" data-last="Finalizar">
													Siguiente
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>

								<div id="modal-wizard" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div id="modal-wizard-container">
												<div class="modal-header">
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">Datos Personales</span>
														</li>

														<li data-step="2">
															<span class="step">2</span>
															<span class="title">Alerts</span>
														</li>

														<li data-step="3">
															<span class="step">3</span>
															<span class="title">Payment Info</span>
														</li>

														<li data-step="4">
															<span class="step">4</span>
															<span class="title">Other Info</span>
														</li>
													</ul>
												</div>

												<div class="modal-body step-content">
													<div class="step-pane active" data-step="1">
														<div class="center">
															<h4 class="blue">Step 1</h4>
														</div>
													</div>

													<div class="step-pane" data-step="2">
														<div class="center">
															<h4 class="blue">Step 2</h4>
														</div>
													</div>

													<div class="step-pane" data-step="3">
														<div class="center">
															<h4 class="blue">Step 3</h4>
														</div>
													</div>

													<div class="step-pane" data-step="4">
														<div class="center">
															<h4 class="blue">Step 4</h4>
														</div>
													</div>
												</div>
											</div>

											<div class="modal-footer wizard-actions">
												<button class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-sm btn-next" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>

												<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
											</div>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->							
						</div>
					</div>
				</div>
			</div><!-- /.main-content -->

			<?php footer(); ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">BUSCAR CLIENTES</h4>
			        </div>

			        <div class="modal-body">
			            <table id="table"></table>
						<div id="pager"></div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
			        </div>
		        </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../../dist/js/jquery.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../dist/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../dist/js/jquery-ui.custom.min.js"></script>
		<script src="../../dist/js/jquery.ui.touch-punch.min.js"></script>						
		<script src="../../dist/js/chosen.jquery.min.js"></script>
		<script src="../../dist/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="../../dist/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="../../dist/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="../../dist/js/x-editable/bootstrap-editable.min.js"></script>
		<script src="../../dist/js/x-editable/ace-editable.min.js"></script>
		<script src="../../dist/js/jquery.gritter.min.js"></script>
		<script src="../../dist/js/jquery.maskedinput.min.js"></script>
		<script src="../../dist/js/jqGrid/jquery.jqGrid.min.js"></script>
        <script src="../../dist/js/jqGrid/i18n/grid.locale-en.js"></script>
        <script src="../../dist/js/select2.min.js"></script>

        <script src="../../dist/js/fuelux/fuelux.wizard.min.js"></script>
		<script src="../../dist/js/jquery.validate.min.js"></script>
		<script src="../../dist/js/additional-methods.min.js"></script>
		<script src="../../dist/js/bootbox.min.js"></script>
		<!-- ace scripts -->		
		<script src="../../dist/js/ace-elements.min.js"></script>
		<script src="../../dist/js/ace.min.js"></script>
		
		<script src="../generales.js"></script>
		<script src="formulario.js"></script>
		<!-- inline scripts related to this page -->
	</body>
</html>  

