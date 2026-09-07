@extends('layouts.app')

@section('title', 'Notre Histoire - ONG AIL Kpalimé')

@section('content')

<div class="font-sans [&_h1]:font-display [&_h2]:font-display [&_h3]:font-display">

{{-- BANNIÈRE SIMPLE (PAGE HEADER) --}}
<section class="relative overflow-hidden bg-[var(--color-dark)] py-10 text-white sm:py-14">
    
    <div class="absolute inset-0 z-0">
        <img 
            src="{{ asset('images/histoire.jpeg') }}" 
            alt="Équipe ONG AIL à votre écoute" 
            class="h-full w-full object-cover object-[center_35%] opacity-10"
        />
    </div>


    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        
        <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[var(--color-primary-light)] mb-4">
            <a href="/" class="hover:text-[var(--color-accent)] transition-colors">Accueil</a>
            <span>/</span>
            <span class="text-[var(--color-accent)]">Notre Histoire</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
           Notre <span class="text-secondary inline-block">histoire</span>
        </h1>

        <p class="text-sm sm:text-base text-gray-300 max-w-2xl leading-relaxed">
            Parcourez le chemin parcouru depuis nos origines, nos étapes clés et les moments forts qui ont façonné l'engagement de l'ONG AIL sur le terrain. 
        </p>

    </div>
</section>


<div class="mx-auto max-w-7xl flow-root px-6 py-12 lg:px-8 lg:py-16">

    <!-- IMAGE -->
    <div class="mb-6 overflow-hidden bg-white md:float-left md:mr-8 md:mb-4 md:w-1/2 lg:w-5/12">
        <img 
            src="{{ asset('images/histoie2.jpeg') }}" 
            alt="Engagement communautaire de l’ONG AIL" 
            class="h-64 w-full object-cover object-center md:h-80"
        >
    </div>

    <!-- TEXTE EN UN SEUL BLOC -->
    <div class="mx-auto max-w-7xl space-y-6 text-justify text-[1.05rem] leading-relaxed text-gray-700 sm:text-lg">

        <p class="border-l-4 border-secondary pl-6 text-lg italic">
            Tout a commencé en 2000, bien avant que le nom AIL ne devienne célèbre. Dans une petite pièce de Kpalimé, deux personnes animées par un rêve fou et un Italien nommé Vito, qui apportait son soutien technique et financier, se lançaient dans l'aventure la plus audacieuse de leur vie : changer le destin des femmes et des jeunes filles vulnérables de leurs communautés. Ils n'étaient que trois, mais déjà, leur énergie suffisait à faire trembler les habitudes, à secouer les idées reçues, à semer l'espoir.
        
        </p>

        <p>
            Deux ans plus tard, en décembre 2002, ce rêve prenait forme. AIL – Appui aux Initiatives Locales – voyait officiellement le jour à Kpalimé, avec 17 membres fondateurs décidés à transformer la vulnérabilité en puissance et les idées en projets concrets. Dès ses premiers pas, AIL ne s'est pas contentée de parler de changement : elle l'a créé, projet après projet, action après action.
        
        </p>

        <p>
            <span class="font-semibold text-secondary">Des coopératives qui font vibrer les communautés</span><br>
            AIL a rapidement donné naissance à des coopératives féminines agricoles, de véritables laboratoires d'innovation et de solidarité : Émeraude Verte à Agogomé, pionnière du bio ; Nyonu Bio à Danyinu ; Bon Légume à Lavié ; Mokpokpo à Womé, experte en tomates et huile rouge ; En Avant-Marche à Kpadapé, où savon et huile de palmiste deviennent des trésors transformés par les mains des femmes. Ces coopératives ne sont pas seulement des lieux de production : elles sont des bouillonnements d'énergie, des espaces où les femmes apprennent, créent, entreprennent et s'approprient leur destin. Elles augmentent leurs revenus, sécurisent l'alimentation locale et démontrent chaque jour que la solidarité féminine est un moteur puissant de transformation.
        
        </p>

        <p>
            <span class="font-semibold text-primary">Innovation et durabilité : le biogaz comme moteur de changement</span><br>
            Face aux difficultés liées aux engrais chimiques et aux déchets organiques, AIL a osé l'innovation : le projet "Biogaz pour l'autonomisation des femmes agricultrices de Kloto" a transformé des déchets ignorés en biofertilisants et biogaz, grâce à des biodigesteurs installés au cœur des communautés. Aujourd'hui, plus de 120 femmes utilisent cette technologie pour accroître leurs récoltes, réduire les produits chimiques et protéger la planète. Chaque biodigesteur est un symbole de fierté, d'ingéniosité et de puissance collective.
        
        </p>

        <p>
            <span class="font-semibold text-success">Le CIPE : un tremplin pour les rêves des jeunes filles</span><br>
            AIL a également créé le Centre Incubateur de l'AIL (CIPE), un lieu unique où les jeunes filles, déscolarisées ou non, en situation de vulnérabilité, retrouvent espoir et force. Ici, elles reçoivent un accompagnement complet, découvrent la technologie et le numérique, acquièrent des compétences entrepreneuriales et développent le courage de rêver grand. Chaque fille qui sort du CIPE avec un projet, un diplôme ou un sourire, porte en elle la promesse d'un futur transformé pour toute sa communauté.
        
        </p>

        <p>
            <span class="font-semibold text-[var(--color-accent-dark)]">Une histoire de résilience et de courage</span><br>
            De deux rêveurs à une organisation de référence, AIL a changé des vies, semé l'espoir et inspiré le changement. Des coopératives aux biodigesteurs, du CIPE aux formations professionnelles, chaque action est un chapitre d'une histoire qui raconte que la vulnérabilité peut devenir puissance, que l'audace peut déplacer des montagnes, et que le changement est possible, même face aux défis les plus complexes. Aujourd'hui, AIL continue d'écrire son histoire avec passion et détermination, et chaque femme formée, chaque jeune fille accompagnée, chaque coopérative florissante est une preuve vivante que les rêves, quand ils sont nourris de courage et d'action, deviennent réalité. Et l'aventure… ne fait que commencer.
        </p>

    </div>

</div>





</div>

@endsection