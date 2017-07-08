
<?php
include_once('db.class.php');
class User {
		
		private $_db;
		public $_idConnect;
		private $_nomConnect;
		
		public function __construct(){
			$this->_db = new Db();
			
		}
		
		public function insert_theme($theme){
			$sql="INSERT into bo_themes(label) VALUES ('".$theme."')";
			$this->_db -> query($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
			echo $sql;
			// return $result;
		}
		public function retrieve_theme(){
			$sqlj="SELECT bo_themes.label FROM bo_themes";
        	$resultj = $this->_db -> select($sqlj);
        	return $resultj;
		}
		public function insert_user($iden,$nom,$login,$pwd,$mail,$level){
			$sql="INSERT into bo_users(id_user,nom,login,motdepasse_pwd,email,id_BO_users_level) VALUES ('".$iden."','".$nom."','".$login."','".$pwd."','".$mail."','".$level."')";
			$this->_db -> query($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
			echo $sql;

		}
		public function insert_article($level,$titre,$com){
			$sql="INSERT into bo_articles(theme,titre,commentaire) VALUES ('".$level."','".$titre."','".$com."')";
			$this->_db -> query($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
			echo $sql;

		}
		public function afichMessageTruncate(){

			// $form=new Db();
			$sql6="SELECT BO_users.nom, BO_messages.message  FROM  BO_users, BO_messages WHERE BO_messages.id_sender=BO_users.id AND  BO_messages.id_user=".$_SESSION['id']."  ORDER BY BO_messages.timbre DESC LIMIT 0,3";
			// $sql3="SELECT id_sender, message FROM bo_messages WHERE  id_user=905 LIMIT 0,4";
			$result6=$this->_db ->select($sql6);
			// var_dump($result);

			for ($i=0; $i<=2 ; $i++) { 
				$out.= '<ul>';
					$out.= '<li>';
						$out.= '<a class="modal-with-form " href="#modalForm">';
							$out.= '<figure class="image">';
								$out.= '<i class="fa fa-commenting"></i>';
							$out.= '</figure>';

				$out.= '<span class="title"><b><font color="#000000">'.$result6[$i]['nom'].'</font></b></span>';
				$out.= '<span class="message truncate">'.$result6[$i]['message'].'</span>';
						$out.= '</a>';
					$out.= '</li>';
										
				$out.= '</ul>';
			
				$out.= '<hr />';
			}
			return $out;

		}

		public function afichmsgPerso($idsender, $nomsender){
			// $sql8="SELECT bo_users.nom, bo_messages.message, bo_messages.timbre, bo_messages.lu, bo_messages.id, bo_messages.id_sender   FROM  bo_users, bo_messages WHERE bo_messages.id_sender=bo_users.id AND  bo_messages.id_user=".$_SESSION['id']." LIMIT 0,10";
			// $sql3="SELECT id_sender, message FROM bo_messages WHERE  id_user=905 LIMIT 0,4";
			$sql8="SELECT * FROM (SELECT id_user, id_sender, message, timbre FROM `BO_messages` WHERE id_user=".$_SESSION['id']." AND id_sender=".$idsender." UNION SELECT id_user, id_sender, message, timbre FROM `BO_messages` WHERE id_user=".$idsender." AND id_sender=".$_SESSION['id'].") AS time ORDER BY time.timbre DESC";
			$result8=$this->_db ->select($sql8);
			for ($i=0; $i<=10 ; $i++) { 
				if ($result8[$i]['id_user']==$_SESSION['id']) {
					$out.='<div class="panel">';
											$out.='<div class="panel-heading">';
												$out.='<div class="panel-actions">';
													$out.='<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>';
													$out.='<a href="#" class="fa fa-mail-reply"></a>';
													$out.='<a href="#" class="fa fa-mail-reply-all"></a>';
													$out.='<a href="#" class="fa fa-star-o"></a>';
												$out.='</div>';
							
												$out.='<p class="panel-title"><b>'.$nomsender.'</b><i class="fa fa-angle-right fa-fw"></i><b>'.$_SESSION['nomComplet'].'</b></p>';
											$out.='</div>';
											$out.='<div class="panel-body">';
												$out.='<p>'.$result8[$i]['message'].'</p>';
											$out.='</div>';
											$out.='<div class="panel-footer">';
												$out.='<p class="m-none"><small>'.$result8[$i]['timbre'].'</small></p>';
											$out.='</div>';
										$out.='</div>';
					
				}else {
					$out.='<div class="panel">';
											$out.='<div class="panel-heading">';
												$out.='<div class="panel-actions">';
													$out.='<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>';
													$out.='<a href="#" class="fa fa-mail-reply"></a>';
													$out.='<a href="#" class="fa fa-mail-reply-all"></a>';
													$out.='<a href="#" class="fa fa-star-o"></a>';
												$out.='</div>';
							
												$out.='<p class="panel-title"><b>'.$_SESSION['nomComplet'].'<i class="fa fa-angle-right fa-fw"></i>'.$nomsender.'</b></p>';
											$out.='</div>';
											$out.='<div class="panel-body">';
												$out.='<p>'.$result8[$i]['message'].'</p>';
											$out.='</div>';
											$out.='<div class="panel-footer">';
												$out.='<p class="m-none"><small>'.$result8[$i]['timbre'].'</small></p>';
											$out.='</div>';
										$out.='</div>';
					

				}

		}
		return $out;
	}

		public function afichMessage(){

			$sql7="SELECT BO_users.nom, BO_messages.message, BO_messages.timbre, BO_messages.lu, BO_messages.id, BO_messages.id_sender   FROM  BO_users, BO_messages WHERE BO_messages.id_sender=BO_users.id AND  BO_messages.id_user=".$_SESSION['id']." ORDER BY BO_messages.timbre DESC LIMIT 0,10";
			// $sql3="SELECT id_sender, message FROM bo_messages WHERE  id_user=905 LIMIT 0,4";
			$result7=$this->_db ->select($sql7);
			for ($i=0; $i<=9 ; $i++) { 

				switch ($result7[$i]['lu']) {
					case '1':
						$out.='<li class="unread">';
													
								$out.='<div class="col-sender">';
									$out.='<div class="checkbox-custom checkbox-text-primary ib">';
										$out.='<input type="checkbox" id="'.$result7[$i]['id'].'">';
										$out.='<label for="check"></label>';
									$out.='</div>';
									$out.='<p class="m-none ib"><b>'.$result7[$i]['nom'].'</b></p>';
								$out.='</div>';
							$out.='<a href="mailbox-email.php?id='.$result7[$i]['id'].'&amp;id_sender='.$result7[$i]['id_sender'].'&amp;nom='.$result7[$i]['nom'].'">';
								$out.='<div class="col-mail">';
									$out.='<p class="m-none mail-content">';
										// $out.='<span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>';
										$out.='<span class="mail-partial">'.htmlentities($result7[$i]['message']).'</span>';	
									$out.='</p>';
									$out.='<p class="m-none mail-date">'.substr($result7[$i]['timbre'], 0,10).'</p>';
								$out.='</div>';
							$out.='</a>';
						$out.='</li>';				
						break;
					
					default:
					$out.='<li>';
													
								$out.='<div class="col-sender">';
									$out.='<div class="checkbox-custom checkbox-text-primary ib">';
										$out.='<input type="checkbox" id="'.$result7[$i]['id'].'">';
										$out.='<label for="check"></label>';
									$out.='</div>';
									$out.='<p class="m-none ib">'.$result7[$i]['nom'].'</p>';
								$out.='</div>';
							$out.='<a href="mailbox-email.php?id='.$result7[$i]['id'].'&amp;id_sender='.$result7[$i]['id_sender'].'&amp;nom='.$result7[$i]['nom'].'">';
								$out.='<div class="col-mail">';
									$out.='<p class="m-none mail-content">';
										// $out.='<span class="subject">Check out our new Porto Admin theme! &nbsp;–&nbsp;</span>';
										$out.='<span class="mail-partial">'.htmlentities($result7[$i]['message']).'</span>';
									$out.='</p>';
									$out.='<p class="m-none mail-date">'.substr($result7[$i]['timbre'], 0,10).'</p>';
								$out.='</div>';
							$out.='</a>';
						$out.='</li>';		
						break;
				}

			}
			return $out;
		}


		// envoyer message dans la messagerie
		public function sendMsg($id_sender, $id_user, $msg, $attach){
			$sql="INSERT into BO_messages(id_user, id_sender, timbre, message, attach, lu) VALUES (".$id_user.", ".$id_sender.", NOW(), '".$msg."', '".$attach."', 0)";
			$result = $this->_db -> query($sql);
			return $result;
		}
		public function getidConnect(){
			return $this->_idConnect=$_SESSION['id'];
		}
		public function getnomConnect(){
			return $this->_nomConnect=$_SESSION['nomComplet'];
		}
		/*** for login process ***/

		public function verifPwd($pseudo){
			$sqlj="SELECT motdepasse_pwd FROM  BO_users WHERE login='".$pseudo."'";
        	$resultj = $this->_db -> select($sqlj);
        	return $resultj[0]['motdepasse_pwd'];
		}
		public function updatePwd($pseudo, $pwd)
		{
			// $sql="SELECT dernier_passwd from bo_users WHERE id=".$_SESSION['id']."";
			// $sql="INSERT INTO bo_users (date_modif) VALUES ('";
			$sql= "UPDATE bo_users SET date_modif = NOW(), motdepasse_pwd=".$pwd." WHERE login=".$pseudo."";
			$result = $this->_db -> query($sql);
			if ($result) {

				return 1;
				
			}else {
				return 2;
			}

		}

		public function test(){
			$test = "SELECT * from bo_users";
			$result = $this->_db -> query($test);
        	$count_rows = $result->num_rows;
        	return $count_rows;
		}
		public function check_login($username, $password) 
		{
			// session_start();
        	$password = md5($password);
			$name = $this->_db->quote($username);
			$sql2="SELECT * from bo_users WHERE login='". $username ."' AND motdepasse_pwd='". $password. "'";
			// jointure pour le level du users
			// $sql4="SELECT COUNT(*) FROM bo_messages WHERE "
			// if ($admintest) $sql2 .= " AND is_admin = 1";

			//checking if the username is available in the table
        	$result = $this->_db -> query($sql2);
        	
        	$count_rows = $result->num_rows;
			$logged=$result->fetch_object();
			$this->_idConnect=$logged->id;
        	if ($count_rows == 1) {
				$sqlj="SELECT bo_users_level.nom FROM bo_users_level, bo_users WHERE bo_users_level.id=".$logged->id_BO_users_level."";
        		$resultj = $this->_db -> select($sqlj);
        		
        		
        		//select mssage non lu du user checké
				$sql3="SELECT COUNT(*)  FROM bo_messages WHERE lu=0 AND id_user=".$logged->id_user."";
				$result3 = $this->_db -> select($sql3);
				

				// select all mesgae du user checké
				$sql4="SELECT COUNT(*)  FROM bo_messages WHERE id_user=".$logged->id_user."";
				$result4 = $this->_db -> select($sql4);
				

				//select 4 dernier messages rexu du user connecté
				$sql5="SELECT id_sender, message FROM bo_messages WHERE id_user=".$logged->id_user." LIMIT 0,4";
				$result5 = $this->_db -> select($sql5);
				foreach ($result5 as $key => $value) {
					# code...
				}
				
				
				$_SESSION['id'] = $logged->id_user;
				// $_SESSION['date_modif'] = $logged->date_modif;
				$_SESSION['pseudo'] = $logged->login;
				$_SESSION['nomComplet'] = $logged->nom;
				$_SESSION['levelUser']=$resultj[0]['nom'];
				$_SESSION['msgno'] = $result3[0]['COUNT(*)'];
				$_SESSION['msgall'] = $result4[0]['COUNT(*)'];
				$_SESSION['id_sender']=$result5[$i]['id_sender'];
				$_SESSION['message']=$result5[$i]['message'];
				// $this->_idConnect=$logged->id;

				mysqli_close($result);
				mysqli_close($resultj);
				mysqli_close($result3);
				mysqli_close($result4);
				mysqli_close($result5);

				if ($resultj[0]['nom'] == "Admin") {
					return 100;
				}elseif($resultj[0]['nom'] == "Author") {
					return 50;
				}
				
	        }
	        
	        else{
			   return 1;
				}
    	}

    	// fonction cadre droit haut du user
    	public function userbox(){

    	}

		/*** starting the session ***/
	    public function get_session() {
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

	    public function afficheTableDefault($skl,$selectall){
					$result = $this->_db -> query($skl);
					
					if ($selectall==1)
					{
					$this->_output.='<table class="table table-bordered table-striped mb-none" id="datatable-default">';
					$this->_output.="<thead>";
					$this->_output.= "<tr>";
						if($result) 

						{
							
							
							
							
							for ($i=0; $i<$result->field_count; $i++) 
							{ 

								$finfo = $result->fetch_field_direct($i);
								$this->_output.= "<th style='color:#0088cc'>".$finfo->name." </th>";

								
							}		
								   		
						}

						$this->_output.="</tr>";
						$this->_output.="</thead>";
						$this->_output.="<tbody>";
							while ($row = $result->fetch_row()) 
							{
								
								$this->_output.= "<tr>";
								for($a=0; $a<=$result->field_count-1; $a++)
									{
										$this->_output.= "<td>".$row[$a]."</td>";
									}
								$this->_output.= "</tr>";			
											
							}
						$this->_output.= "</tbody>";
						$this->_output.="</table>";

						return $this->_output;

					}else
					{
						$this->_output= "verifie tn $selectall";
						return $this->_output;
					}



				}
}

?>