<?php

class Annonce{

    private $id;

    private $titre;

    private $auteur;

    private $contenu;

    public function getId(): ?int{
        return $this->id;
    }

    public function getTitre(): ?string{
        return $this->titre;
    }

    public function setTitre(string $titre): self{
        $this->titre= $titre;

        return $this;
    }

    public function getAuteur(): ?string{
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self{
        $this->auteur = $auteur;

        return $this;
    }

    public function getContenu(): ?string{
        return $this->contenu;
    }

    public function setContenu(string $contenu): self{
        $this->contenu = $contenu;

        return $this;
    }
}