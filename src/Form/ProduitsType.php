<?php

namespace App\Form;

use App\Entity\Produits;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProduitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_produit', TextType::class,[
                "label" => "Nom du produit",
            ])
            ->add('description_produit', TextareaType::class,[
                "label" => 'Description du produit'
            ])
            ->add('prix_produit', NumberType::class,[
                "label" => "Prix du produit"
            ])
            ->add('image_produit', FileType::class,[
                "label" => "Image du produit",
                "required" => false,
                "data_class" => null,
                "empty_data" => "Pas d'image pour ce produit"
            ])
            ->add('stock_produit', CheckboxType::class,[
                "label" => "Produit en stock ?"
            ])
            ->add('date_produit', DateTimeType::class,[
                "label" => "Date de depot du produit"
            ])
            ->add('user_id', EntityType::class,[
                "label" => "Utilisateur",
                'class' => User::class,
                "choice_label" => "email"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produits::class,
        ]);
    }
}
