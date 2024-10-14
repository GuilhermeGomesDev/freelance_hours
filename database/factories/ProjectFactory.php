<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => "Estou em busca de um desenvolvedor front-end experiente para criar um site moderno, responsivo e interativo, com foco em performance, design atraente e boa experiência do usuário (UX). As principais tecnologias a serem utilizadas são HTML5, CSS3, JavaScript e, possivelmente, frameworks como React ou outro. O objetivo do projeto é desenvolver um site que funcione perfeitamente em dispositivos móveis, tablets e desktops, com um design profissional e recursos de interatividade, focado na apresentação de serviços, portfólio de projetos e uma seção de contato.",
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['nodejs', 'react', 'javascript', 'vite', 'nextjs'], random_int(1, 5)),
            'created_by' => User::factory(),
        ];
    }
}
