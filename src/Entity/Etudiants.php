<?php

namespace App\Entity;

use App\Entity\OneToMany\Bidirectionnelle\Post;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'Etudiants')]
class Etudiants
{
    #[ORM\Id]
    #[ORM\Column(name: 'id_etu', type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;
    #[ORM\Column(name: 'nom', type: 'string', length: 50)]
    private string $nom;
    #[ORM\Column(name: 'prenom', type: 'string', length: 50)]
    private string $prenom;
    #[ORM\ManyToOne(targetEntity: Promotions::class, inversedBy: "promotions")]
    #[ORM\JoinColumn(name: "id_prom", nullable: false)]
    private Promotions $promotions;
}