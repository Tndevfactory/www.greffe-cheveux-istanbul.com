<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

 class Makepdf extends FPDF {



function index($prm1='',$prm2=''){
      
    return $this->parser('hi','ho') ;

}// end method index


function parser($msg1='',$msg2=''){
      
      
      $this->db= new Database;


      // die('i am in homes ctrl');
 
       $this->loader = new FilesystemLoader(APPROOT.'/app/views/');
       // chmod tmp_cache
       
       $this->twig = new Environment($this->loader,[
         
         'debug' => true,
         'cache' =>  APPROOT.DS.'app'.DS.'tmp_cache'
           
         ]);

        Echo $this->twig->render(DS.'homes'.DS.'index.twig', [
        
            'person' => [
              'msg1'=> $msg1,
              'msg2' => $msg2
              ]
          
          ]);

}// end method index


      

// Page header
function Header(){
      // Logo
      $this->Image(URLROOT.DS.'public'.DS.'img'.DS.'csft.jpg',5,1,30);
      // $this->Image('views/assets/img/10.jpg',65,1,30);
      // Arial bold 15Times
      $this->SetFont('Arial','B',15);
      // Move to the right
      $this->Cell(60);
      $this->SetTextColor(0,0,105);
      $this->Cell(80,11,'Centre Sectoriel Cite ElKhadra',1,0,'C');
      // Line break
      $this->Ln(20);
}

function bodyPdf(){
 // gather data
//  if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['photo'])){

//   $id=$_POST['id'];
//   $nom=$_POST['nom'];
//   $email=$_POST['email'];
//   $specialite=$_POST['specialite'];
//   $address=$_POST['address'];
//   $gsm=$_POST['gsm'];
//   $date_enregistrement=$_POST['date_enregistrement'];
//   $imgPath='img/'.$_POST['photo'];

  
        
// }else{

//   echo '<a style="color:blue;margin-left:66px;font-size:22px;display:inline-block" href="ind.php"> << go back</a>';
//   echo '<h1 style="color:crimson;text-align:center"> Donnees manquantes, assurez que toutes les informations sont transmises !</h1>';
// }
  
$this->point=63;
$this->step=7;
$this->id='1';
  $this->nom='ch';
  $this->email='ch@de';
  $this->specialite='fff';
  $this->address='yyy';
  $this->gsm='ggg';
  $this->date_enregistrement='22/5/2155';
  $this->imgPath=URLROOT.DS.'public'.DS.'img'.DS.'10.jpg';
  
$this->AliasNbPages();
$this->AddPage();

 $this->Image($this->imgPath,10,$this->point-30,30);


$this->SetY($this->point);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,0);
$this->Cell(43,10,'Numero d\'inscription :',0,0);
$this->SetFont('Times','b',13);
$this->SetTextColor(0,0,105);
$this->Cell(10,10,$this->id,0,1);

$this->SetY($this->point + $this->step);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,0);
$this->Cell(23,10,'Nom:',0,0);
$this->SetFont('Times','b',13);
$this->SetTextColor(0,0,105);
$this->Cell(10,10,$this->nom,0,1);

$this->SetY($this->point + $this->step*2);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,0);
$this->Cell(23,10,'Email:',0,0);
$this->SetFont('Times','b',13);
$this->SetTextColor(0,0,105);
$this->Cell(10,10,$this->email,0,1);

$this->SetY($this->point + $this->step*3);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,0);
$this->Cell(23,10,'Specialite: ',0,0);
$this->SetFont('Times','b',13);
$this->SetTextColor(0,0,105);
$this->Cell(10,10,$this->specialite,0,1);


$this->SetY($this->point + $this->step*4);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,0);
$this->Cell(23,10,'Adresse: ',0,0);
$this->SetFont('Times','b',13);
$this->SetTextColor(0,0,105);
$this->Cell(10,10,$this->address,0,1);

$this->SetY($this->point + $this->step*5);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,0);
$this->Cell(22,10,'Inscrit le: ',0,0);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,105);
$this->Cell(10,10,$this->date_enregistrement,0,1);


$this->SetY($this->point + $this->step*6);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,0);
$this->Cell(23,10,'Num GSM: ',0,0);
$this->SetFont('Times','b',12);
$this->SetTextColor(0,0,105);
$this->Cell(10,10,$this->gsm,0,1);

$this->SetY(55);
$this->SetX(122);
$this->SetTextColor(0,0,0);
$this->SetFont('Times','',10);
$this->Cell(10,$this->point-43,'Extrait fait a Tunis, a la date du '. date(' d / m / Y'),0,1);
$this->line(10,$this->point+1,190,$this->point+2);


$this->line(10,$this->point + $this->step*8-3,190,$this->point + $this->step*8-3);


$this->Output();



}




// Page footer
function Footer()
{
      // Position at 1.5 cm from bottom
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Page number
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}


}

