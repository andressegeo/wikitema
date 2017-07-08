<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/class.upload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/assets/inc/config.php';

	class FormManager{

			private $m_db;

			public function AffichChamp($field,$updateValue){

						$i=0;
						
						if ($field['Null']=="NO") {
						$required=1;
						}

						// echo $updateValue;
						// echo "dfgdfg" .$updateValue;
						if (is_null($updateValue)) {
							if (is_null($field['Default'])) {
								
							}else{
								$fieldValue=$field['Default'];
							}
							
						}else{
							$fieldValue=$updateValue;
						}
						// echo $fieldValue;
						if ($posi=strpos($field['Type'],'(')) 
								{
						        $typech=substr($field['Type'],0,strpos($field['Type'],'('));
						        // $typesr=$field['Null'];
						        // $len=substr($field['Type'],strpos($field['Type'],'(')+1,strpos($field['Type'],')')-strpos($field['Type'],'(')-1);
						    	}
						else{
						    	$typech=$field['Type'];
						    	
						    }
						    // $output.='<div class="panel-body">';
						    // $output.="<b>".$field['Comment']."</b>".($required?' <font color="red">*</font> ':' ');
						    // $output.=($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']);

						    // $fiel['null'] pour verifier l'obligation o user de remplir le champ => mettre (* si NO)
						    // (is_null($fieldValue)?" ": "value= ".$fieldValue);
						    switch ($typech) {
						  	case 'int':
						  				if (strstr($field['Field'], 'id_')) {// champ clé etrangere (si id_ se retrouve ds la chaine $field['Field']
						  					$rest = substr($field['Field'], 3);// recupere la souschaine à partir de...
						  					$db = new Db; 	
											$sql="SELECT id,nom FROM ".$rest;
											// echo $sql;
											$rek=$db->select($sql);
											// $output.= ' || <select name="'.$field['Field'].'">';
											// $output.='<option selected>'.$fieldValue.'</option>';
											// // var_dump($rek);
											// foreach($rek as $val){$output.='<option value="'.$val['id'].'" '.($fieldValue==$val['id']?'selected':'').'>'.$val['nom'].'</option>';}
											// $output.= '</select></br>';
											// // var_dump($rek);
											// -------
											// $output.= ' || <select name="'.$field['Field'].'">';
											// les 4 lignes de dessous sont en comentaire
											// $output.='<option selected>'.$fieldValue.'</option>';
											// var_dump($rek);
											// foreach($rek as $val){$output.='<option value="'.$val['id'].'" '.($fieldValue==$val['id']?'selected':'').'>'.$val['nom'].'</option>';}
											// $output.= '</select></br>';

											$output.='<div class="form-group">';
												$output.='<label class="col-md-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.='<div class="col-md-6">';
													$output.='<select class="form-control" data-plugin-multiselect id="ms_example1">';
														foreach($rek as $val){$output.='<option value="'.$val['id'].'" '.($fieldValue==$val['id']?'selected':'').'>'.$val['nom'].'</option>';}
													$output.='</select>';
												$output.='</div>';
											$output.='</div>';

						  				}else{
						  				// $output.= ' || c \'est un entier: <input type="number" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'" /></br> ';
						  				$output.= '<div class="form-group">';
												$output.= '<label class="col-md-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.= '<div class="col-md-6">';
												// --------------
												// Ne po oubliee pour faire marcher les buttons
													$output.= '<div data-plugin-spinner data-plugin-options=\'{ "value":0, "min": -10, "max": 10 }`\'>';
														$output.= '<div class="input-group" style="width:200px">';
															$output.= '<input type="text" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'" class="spinner-input form-control" maxlength="3" '.($required?"required":' ').'/>';
															$output.= '<div class="spinner-buttons input-group-btn">';
																$output.= '<button type="button" class="btn btn-default spinner-up">';
																	$output.= '<i class="fa fa-angle-up"></i>';
																$output.= '</button>';
																$output.= '<button type="button" class="btn btn-default spinner-down">';
																	$output.= '<i class="fa fa-angle-down"></i>';
																$output.= '</button>';
															$output.= '</div>';
														$output.= '</div>';
													$output.= '</div>';
													// $output.= '<p>';
													// 	$output.= 'with <code>max</code> value set to 10';
													// $output.= '</p>';
												$output.= '</div>';
										$output.= '</div>';
						  					 }
						  		break;

						  	case 'decimal':
						  	// $output.=' ||  c \'est un decimal:  <input  type="text" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'"/> </br>';
						  	$output.='<div class="form-group">';
											$output.='<label class="col-sm-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
											$output.='<div class="col-md-9" style="width:200px;">';
												$output.='<input type="text" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'" class="spinner-input form-control" maxlength="5" placeholder="eg: 2,35" '.($required?"required":' ').'/>';
											$output.='</div>';
										$output.='</div>';
						  	
						  		break;

						  	case 'text':
						  	// $output.=' ||  c \'est un texte:  <textarea  name="'.$field['Field'].'">'.(is_null($fieldValue)?' ':$fieldValue).'</textarea> </br>';
						  	$output.='<div class="form-group">';
												$output.='<label class="col-md-3 control-label" for="textareaDefault"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.='<div class="col-md-5">';
													$output.='<textarea class="form-control" rows="5" name="'.$field['Field'].'" data-plugin-maxlength maxlength="140" '.($required?"required":' ').'>'.(is_null($fieldValue)?' ':$fieldValue).'</textarea>';
													$output.='<p><code>Caractères-Max</code> jusque 140.</p>';
												$output.='</div>';
							$output.='</div>';
						  	
						  		break;

						  


						  	case 'email':
						  	// $output.='||   c \'est un email <input type="email" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'"/></br>';
						  	$output.='<div class="form-group">';
									$output.='<label class="col-sm-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
											$output.='<div class="col-sm-6">';
												$output.='<div class="input-group">';
													$output.='<span class="input-group-addon">';
														$output.='<i class="fa fa-envelope"></i>';
													$output.='</span>';
													$output.='<input type="email" name="'.$field['Field'].'" value="'.(is_null($fieldValue)?' ':$fieldValue).'" class="form-control" placeholder="" '.($required?"required":' ').'/>';
												$output.='</div>';
											$output.='</div>';
							$output.='</div>';
						  	
						  		break;

						  	case 'varchar':
						  			 // (strstr($field['Field'], '_pwd')?$output.=' || <input type="password"  name="'.$field['Field'].'"/></br>':'');
						  			if( strstr($field['Field'], '_pwd')) 
						  			{ 
						  				// ya po de value pour le password 
						  				// $output.=' || <input type="password"  name="'.$field['Field'].'"/></br>';
						  				$output.='<div class="form-group">';
												$output.='<label class="col-md-3 control-label" for="inputPassword"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.='<div class="col-md-6">';
													$output.='<input type="password" name="'.$field['Field'].'" class="form-control" placeholder="" id="inputPassword" '.($required?"required":' ').'>';
												$output.='</div>';
										$output.='</div>';
									}
									elseif (strstr($field['Field'], '_image')) 
									{
										// $output.=' || <input  type="file" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'"/></br>';
										$output.='<div class="form-group">';
											$output.='<label class="col-md-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.='<div class="col-md-9">';
													$output.='<div class="fileupload fileupload-new" data-provides="fileupload">';
														$output.='<div class="input-append">';
															$output.='<div class="uneditable-input">';
																$output.='<i class="fa fa-file fileupload-exists"></i>';
																$output.='<span class="fileupload-preview"></span>';
															$output.='</div>';
															$output.='<span class="btn btn-default btn-file">';
																$output.='<span class="fileupload-exists">Change</span>';
																$output.='<span class="fileupload-new">Select file</span>';
																$output.='<input type="file" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'" '.($required?"required":' ').'/>';
															$output.='</span>';
															$output.='<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>';
														$output.='</div>';
													$output.='</div>';
												$output.='</div>';
										$output.='</div>';

									}
									elseif (strstr($field['Field'], '_file')) 
									{
										// $output.= ' || <input  type="file" name="'.$field['Field'].'"/></br>';
										$output.='<div class="form-group">';
												$output.='<label class="col-md-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.='<div class="col-md-9">';
													$output.='<div class="fileupload fileupload-new" data-provides="fileupload">';
														$output.='<div class="input-append">';
															$output.='<div class="uneditable-input">';
																$output.='<i class="fa fa-file fileupload-exists"></i>';
																$output.='<span class="fileupload-preview"></span>';
															$output.='</div>';
															$output.='<span class="btn btn-default btn-file">';
																$output.='<span class="fileupload-exists">Change</span>';
																$output.='<span class="fileupload-new">Select file</span>';
																$output.='<input type="file" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'" '.($required?"required":' ').'/>';
															$output.='</span>';
															$output.='<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>';
														$output.='</div>';
													$output.='</div>';
												$output.='</div>';
										$output.='</div>';

									}elseif (strstr($field['Field'], 'email')) 
									{
											// $output.='||   c \'est un email <input type="email" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'"/></br>';
									  	$output.='<div class="form-group">';
												$output.='<label class="col-sm-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
														$output.='<div class="col-sm-6">';
															$output.='<div class="input-group">';
																$output.='<span class="input-group-addon">';
																	$output.='<i class="fa fa-envelope"></i>';
																$output.='</span>';
																$output.='<input type="email" name="'.$field['Field'].'" value="'.(is_null($fieldValue)?' ':$fieldValue).'" class="form-control" placeholder="eg: email@email.com" '.($required?"required":' ').'/>';
															$output.='</div>';
														$output.='</div>';
										$output.='</div>';
									  	
						  		
									}
									else 
									{
										// $output.= ' ||   c \'est un champ de carak <input  type="text" value="'.$fieldValue.'" name="'.$field['Field'].'"/></br></br>';

										$output.= '<div class="form-group">';
											$output.= '<label class="col-sm-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
											$output.= '<div class="col-sm-5">';
												$output.= '<input type="text" value="'.$fieldValue.'" name="'.$field['Field'].'" class="form-control" placeholder="" '.($required?"required":' ').'/>';
											$output.= '</div>';
										$output.= '</div>';
										
									}
						  	
						  		break;

						  	case 'tinyint':
						  	// $output.=' ||   c\'est un bool  <input type="checkbox" value="'.$fieldValue.'""'.($fieldValue==1?'checked': '').'" name="'.$field['Field'].'"/></br>';
						  	$output.='<div class="form-group">';
												$output.='<label class="col-md-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.='<div class="col-md-3">';
													$output.='<div class="checkbox-custom checkbox-default">';
														$output.='<input type="checkbox" value="'.$fieldValue.'"'.($fieldValue==1?'checked': '').' name="'.$field['Field'].'" id="checkboxExample2">';
														$output.='<label for="checkboxExample2"></label>';
													$output.='</div>';						
												$output.='</div>';
							$output.='</div>';

						  						
						  	
						  		break;

						  	case 'date':
						  	// $output.=' ||   c \'est une date <input type="date" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'"/></br>';
						  	$output.='<div class="form-group">';
												$output.='<label class="col-md-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.='<div class="col-md-5">';
													$output.='<div class="input-group">';
														$output.='<span class="input-group-addon">';
															$output.='<i class="fa fa-calendar"></i>';
														$output.='</span>';
														$output.='<input type="text" value="'.(is_null($fieldValue)?' ':$fieldValue).'" name="'.$field['Field'].'" data-plugin-datepicker data-date-format="yyyy-mm-dd" data-date-language="fr-FR" class="form-control" '.($required?"required":' ').'>';
													$output.='</div>';
												$output.='</div>';
							$output.='</div>';
						  		break;
			 
						  	case 'enum':	
						  			// 		$masque = "#(?:enum|set)\('([^\)].*)'\)$#i";	
											// $valeurs = preg_replace($masque, "$1", $field['Type']);
											// $tval 	= explode("','", $valeurs);
											// $retour = array("valeurs" => $tval);
						  			// 		($field['Default']=="null"?$output.=' || <select name="'.$field['Field'].'">'foreach($retour[valeurs] as $val){$output.='<option value="'.$val.'"'.($fieldValue==$val?'selected':$fieldValue).'>'.$val.'</option>'} $output.= '</select></br>'}:$output.=' || <select name="'.$field['Field'].'">'foreach($retour[valeurs] as $val){$output.='<option value="'.$val.'"'.($fieldValue==$val?'selected':$fieldValue).'>'.$val.'</option>'}
											// 						$output.= '</select></br>');
						  					// le default de l'enum(placé en premiere position)

						  		 			$masque = "#(?:enum|set)\('([^\)].*)'\)$#i";	
											$valeurs = preg_replace($masque, "$1", $field['Type']);
											$tval 	= explode("','", $valeurs);
											$retour = array("valeurs" => $tval);
											// $output.=' || <select name="'.$field['Field'].'">';
											// var_dump($retour[valeurs]);
											// foreach($retour[valeurs] as $val){$output.='<option value="'.$val.'"'.($fieldValue==$val?'selected':$fieldValue).'>'.$val.'</option>';}
											// 						$output.= '</select></br>';
											$output.='<div class="form-group">';
												$output.='<label class="col-md-3 control-label"><b>'.($required? $field['Comment'].'<font color="red">*</font>':$field['Comment']).'</b><span class="required"></span></label>';
												$output.='<div class="col-md-9">';
													$output.='<select class="form-control" data-plugin-multiselect id="ms_example1">';
														foreach($retour[valeurs] as $val){$output.='<option value="'.$val.'"'.($fieldValue==$val?'selected':$fieldValue).'>'.$val.'</option>';}
													$output.='</select>';
												$output.='</div>';
											$output.='</div>';
												

							break;


							
							}
						    
						 
						

							
							 // $output.='</div>';
							 return $output;


			}


			// function qui return AffichCHamp prend en parametre la table passé
			public function ReturnForm($table,$id,$urlAction,$debut,$fin){
						// $urlAction="test2";
						$form = new Db;
						$sql="SHOW FULL COLUMNS FROM ".$table;
						echo $sql;
						$rek=$form->select($sql); 	
						// var_dump($rek);
						$output.='<form action="'.$urlAction.'" id="form"   method="post" enctype="multipart/form-data">';
						$output.='<input type="hidden" value="'.$id.'" name="id"/>';
						$output.='<input type="hidden" value="'.$table.'"name="nomTable"/>';
						// if ($id) {
						// 	$skl="SELECT * FROM ".$table. " WHERE id=".$id."";
						// 	echo $skl;
						// 	$result=$form->select($skl);
						// // var_dump($result);
						// }

						if ($id==0) {
							$buttonName="INSERT";
						}else{
							$buttonName="UPDATE";
							$skl="SELECT * FROM ".$table. " WHERE id=".$id."";
							echo $skl;
							$result=$form->select($skl);
							// var_dump($result);
						}
						
						$i=0;
						foreach($rek as $field)
						{ 
						
							if($i>=$debut)
							{
								// var_dump($field);
								$output.=$this->AffichChamp($field,$result[0][$field['Field']]);
							}
							$i++;
						}

						// Footer de l'interface
						$output.='</br>';
						$output.='<footer class="panel-footer">';
						$output.='<div class="row">';
											$output.='<div class="col-sm-9 col-sm-offset-3">';
												$output.='<button class="btn btn-primary" name="submit">'.$buttonName.'</button>';
												$output.='<button type="reset" class="btn btn-default">Reset</button>';
											$output.='</div>';
						$output.='</div>';
						$output.='</footer>';	
						// $output.='<button type="submit" name="submit">'.$buttonName.'</button>';
						// $output.='<button type="submit" name="submited">Update</button>';
						$output.='</form>';
						return $output;
												}

						
			// soumission du formulaire
			public function submitForm(){

				if ($_POST['id']==0) {
					$this->InsertBd();
				}else{
					$this->UpdateBd();
				}
			}

			// Function Insert prend en parametre la table passé dans test.php
			public function InsertBd(){
						var_dump($_POST);
						var_dump($_FILES);
						  while ($val=current($_FILES)) 
						  {
				    		
				    		if ($val['size']>0) 
							 	
							 	{

									 $chemin=$_SERVER['DOCUMENT_ROOT']."/wikitema/imgs/invits";
							         $handle = new upload($val);
							         if ($handle->uploaded) 
							         {
							         	if(strstr(key($_FILES), '_image')){
							         	 $handle->allowed = array('image/*'); 
							             $handle->process($chemin);	
							         	}else{
							         	 $handle->process($chemin);		
							         	}
							             
							             if ($handle->processed) {
							                 $nomdufichier=$handle->file_dst_name;
							                 $handle->clean();
							             } else {
							                
							                	$error=1;

							             		}							 		
								 	  }
								 $sql3.=",".key($_FILES)."";
				    			 $sql4.=",'".$nomdufichier."'";		  
						 		 }

						  // echo "".key($_FILES)." '=>' ".$val['name']."";
						  		 
				     	  next($_FILES);
				     	  // var_dump($val);

				     	 }


					   $form = new Db;
					   $sql="INSERT INTO ".$_POST['nomTable']."(id_user,date_modif";

					   //methode qui permet de Supprimer un élément dans un tableau
					   unset($_POST['nomTable']);
					   unset($_POST['submit']);
					   unset($_POST['id']);
					    foreach ($_POST as $key=>$value) {
				    		
				    		// unset($_POST['submit']);
				    		$sql1.=",".$key."";
				    		$sql2.=",'".$form->quote($value)."'";	
				    	}
				    	$sql.=$sql1;
				    	$sql.=$sql3;								
					   	$sql.=")";
					   	$sql.=" VALUES(2017005,NOW()";
					   	$sql.=$sql2;
					   	$sql.=$sql4;		 
				        $sql.=")";
				        $rek=$form->query($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
				       	echo $sql;	
				        
				}
				
				// function qui recupere le nom des colones en bd fonction de la table passé en param!
				// function getColumnNames($tablenames){ 
						
				// 		try {
				// 		$con=new PDO('mysql:host=localhost;dbname=casting', 'root', '');

				// 		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				// 		// recupere le nom des colones
				// 		$query = $con->prepare("DESCRIBE $tablenames");
				// 		$query->execute();
				// 		$table_names = $query->fetchAll(PDO::FETCH_COLUMN);
				// 		return $table_names;
				// 		$con = null;

				// 		} catch(PDOExcepetion $e) {
				// 		echo $e->getMessage();
				// 		}
    // 					}  

				Public function affichPortlet($tab){
				 	// echo $tab;
				 	
					 	if ($tab=='tab1') {

					 		$output.='<div class="col-md-4"  id="portlet-1">';
							$output.='<section class="panel panel-primary" id="panel-1" data-portlet-item>';
								$output.='<header class="panel-heading portlet-handler">';
									$output.='<div class="panel-actions">';
										$output.='<a href="#" class="panel-action panel-action-toggle data-panel-toggle"></a>';
										$output.='<a href="#" class="panel-action panel-action-dismiss data-panel-dismiss"></a>';
									$output.='</div>';

									$output.='<h2 class="panel-title">Title</h2>';
								$output.='</header>';
								$output.='<div class="panel-body">';
									$output.="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi";
								$output.='</div>';
							$output.='</section>';
							
						$output.='</div>';
						return $output;
				 		}else{
				 		// $output='<div class="row">';
				 		$output='<div class="col-md-4"  id="portlet-1">';
							$output='<section class="panel panel-primary" id="panel-1" data-portlet-item>';
								$output='<header class="panel-heading portlet-handler">';
									$output='<div class="panel-actions">';
										$output='<a href="#" class="panel-action panel-action-toggle data-panel-toggle"></a>';
										$output='<a href="#" class="panel-action panel-action-dismiss data-panel-dismiss"></a>';
									$output='</div>';

									$output='<h2 class="panel-title">Title</h2>';
								$output='</header>';
								$output='<div class="panel-body">';
									$output="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non imperdiet nisi";
								$output='</div>';
							$output='</section>';
							
						$output='</div>';
						return $output;
				 		}
					// $output='</div>';
					
				 		}

			// Function Update prend en parametre la table passé dans test.php
			public function UpdateBd(){

						var_dump($_POST);
						// var_dump($_FILES);
						// var_dump(current($_FILES));
						  
					   $form = new Db;
					   $sql="UPDATE ".$_POST['nomTable']." SET date_modif= NOW()";
					   unset($_POST['nomTable']);
					   unset($_POST['submit']);
					    foreach ($_POST as $key=>$value) 
				    	{
				    		$sql1.=", ".$key."='".$form->quote($value)."'";

				    		// $sql2.=",'".$value."'";	
				    	}
				    	
				    		// var_dump($_FILES);
				    		// var_dump($value);
				    	$sql.=$sql1;
				    	// echo $sql;
					 // var_dump(key($_FILES));
					 // var_dump($nomdufichier);
					    
					    
					   	// $sql.=")";
					   	// $sql.=" WHERE id=7";
					   	// echo $sql;
					   	// $sql.=$sql2;		 
				        // $sql.=")";
				        // $rek=$form->query("$sql") or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
					    
					    while ($val=current($_FILES)) 
						  {
				    		
				    		if ($val['size']>0) 
							 	
							 	{

									 $chemin=$_SERVER['DOCUMENT_ROOT']."/wikitema/imgs/invits";
							         $handle = new upload($val);
							         if ($handle->uploaded) 
							         {
							         	if(strstr(key($_FILES), '_image')){
							         	 $handle->allowed = array('image/*'); 
							             $handle->process($chemin);	
							         	}else{
							         	 $handle->process($chemin);		
							         	}
							             
							             if ($handle->processed) {
							                 $nomdufichier=$handle->file_dst_name;
							                 $handle->clean();
							             } else {
							                
							                	$error=1;

							             		}							 		
								 	  }
								 $sql2.=",".key($_FILES)."='".$nomdufichier."'";
				    	 		 // $sql4.=.$nomdufichier."'";		  
						 		 }

						  // echo "".key($_FILES)." '=>' ".$val['name']."";
						  		 
				     	  next($_FILES);
				     	  // var_dump($val);

				     	 }	
				    	// echo "".key($_FILES)." '=>' ".$val['name']."";
				    	// var_dump($nomdufichier);
				    	
				    	$sql.=$sql2;								
					   	// $sql.=")";
					   	$sql.=' WHERE id='.$_POST['id'].'';
					   	echo $sql;
					   	// $sql.=$sql2;		 
				        // $sql.=")";
				        // $rek=$form->query("$sql") or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
			}
		}




		// public function ReturnTab($nomTable){
		// 		// $bdd = new PDO('mysql:host=localhost;dbname=casting', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		// 		$form = new Db;
		// 		$sql="SELECT * FROM ".$nomTable." LIMIT(0,5)";
		// 		echo $sql;
		// 		$rek=$bdd->select("$sql");
		// 		foreach($rek as $donnees){
		// 			var_dump($donnees);
		// 		}

		// }
	

?>
	