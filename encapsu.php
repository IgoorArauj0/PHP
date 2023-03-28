<?php
class Aluno {
  private $nome;
  private $cpf;
  protected $mediaAnual;
  
  public function getNome() {
    return $this->nome;
  }
  public function setNome($name) {
    $this->nome= $name;
  }
   public function getCpf() {
    return $this->cpf;
  }
  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }
 
  public function getMediaAnual() {
    return $this->mediaAnual;
  }
  
  public function setMediaAnual($media) {
    $this->mediaAnual = $media;
  }
}

$emanuel = new Aluno;
$emanuel->setNome("Emanuel");
echo "O aluno {$emanuel->getNome()} é muito estudioso";
?>