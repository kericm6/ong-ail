@extends ('layouts.app')

@section('title', 'Nous contacter')




@section('content')

@include ('contact.contact_banner')
<!-- SECTION PRINCIPALE CONTACT (INFOS & FORMULAIRE) -->
<section class="py-16 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- COLONNE GAUCHE : Coordonnées, Horaires & Réseaux (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Bloc Coordonnées -->
                <div class="bg-[var(--color-light)] p-6">
                    <h2 class="text-lg font-extrabold text-[var(--color-dark)] mb-4 uppercase tracking-wide">
                        Nos Coordonnées
                    </h2>
                          <ul class="space-y-4 text-sm text-[var(--color-dark)]">
                        <li class="flex items-start gap-3">
                            <span class="flex min-w-[24px] items-center justify-center bg-primary-dark p-1 text-xs font-bold text-accent"><i class="fa-solid fa-location-dot" aria-hidden="true"></i><span class="sr-only">Adresse</span></span>
                            <div>
                                <strong class="block text-xs font-bold uppercase text-[var(--color-gray)]">Adresse du siège</strong>
                                <span>Quartier Administratif, Lomé, Togo</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="flex min-w-[24px] items-center justify-center bg-primary-dark p-1 text-xs font-bold text-accent"><i class="fa-solid fa-phone" aria-hidden="true"></i><span class="sr-only">Téléphone</span></span>
                            <div>
                                <strong class="block text-xs font-bold uppercase text-[var(--color-gray)]">Téléphone / WhatsApp</strong>
                                <a href="tel:+22800000000" class="hover:text-[var(--color-primary)] transition-colors font-medium">+228 00 00 00 00</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="flex min-w-[24px] items-center justify-center bg-primary-dark p-1 text-xs font-bold text-accent"><i class="fa-solid fa-envelope" aria-hidden="true"></i><span class="sr-only">Email</span></span>
                            <div>
                                <strong class="block text-xs font-bold uppercase text-[var(--color-gray)]">Email officiel</strong>
                                <a href="mailto:contact@ong-ail.org" class="hover:text-[var(--color-primary)] transition-colors font-medium">contact@ong-ail.org</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Bloc Horaires d'ouverture -->
                <div class="bg-white p-6">
                    <h3 class="text-sm font-extrabold text-[var(--color-dark)] uppercase tracking-wider mb-3">
                        Horaires d'ouverture
                    </h3>
                    <div class="space-y-2 text-xs text-[var(--color-gray)]">
                        <div class="flex justify-between border-b border-gray-100 pb-1">
                            <span>Lundi – Vendredi :</span>
                            <span class="font-bold text-[var(--color-dark)]">08h00 – 17h00</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-100 pb-1">
                            <span>Samedi :</span>
                            <span class="font-bold text-[var(--color-dark)]">09h00 – 12h00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Dimanche & Jours fériés :</span>
                            <span class="font-bold text-[var(--color-secondary)]">Fermé</span>
                        </div>
                    </div>
                </div>

                <!-- Réseaux Sociaux -->
                <div class="p-6 bg-[var(--color-dark)] text-white">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-[var(--color-accent)] mb-3">
                        Suivez nos actions
                    </h3>
                    <div class="flex gap-2">
                        <a href="https://web.facebook.com/ONGassociationAIL/" class="bg-white/10 hover:bg-[var(--color-primary)] text-white text-xs font-bold px-3 py-2 transition-colors">Facebook</a>
                        <a href="#" class="bg-white/10 hover:bg-[var(--color-primary)] text-white text-xs font-bold px-3 py-2 transition-colors">LinkedIn</a>
                        <a href="#" class="bg-white/10 hover:bg-[var(--color-primary)] text-white text-xs font-bold px-3 py-2 transition-colors">X (Twitter)</a>
                    </div>
                </div>

            </div>

            <!-- COLONNE DROITE : Formulaire de Message (7 cols) -->
            <div class="lg:col-span-7 bg-[var(--color-light)] p-6 md:p-8">
                <h2 class="text-xl font-extrabold text-[var(--color-dark)] mb-6 border-b border-gray-200 pb-3">
                    Envoyez-nous un message
                </h2>

                <form action="/contact/send" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase text-[var(--color-dark)] mb-1">Nom complet *</label>
                            <input 
                                type="text" 
                                required 
                                placeholder="Votre nom" 
                                class="w-full px-4 py-2.5 bg-white border border-gray-300 text-sm focus:outline-none focus:border-[var(--color-primary)]" 
                            />
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase text-[var(--color-dark)] mb-1">Adresse Email *</label>
                            <input 
                                type="email" 
                                required 
                                placeholder="exemple@email.com" 
                                class="w-full px-4 py-2.5 bg-white border border-gray-300 text-sm focus:outline-none focus:border-[var(--color-primary)]" 
                            />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase text-[var(--color-dark)] mb-1">Téléphone</label>
                            <input 
                                type="tel" 
                                placeholder="+228 00 00 00 00" 
                                class="w-full px-4 py-2.5 bg-white border border-gray-300 text-sm focus:outline-none focus:border-[var(--color-primary)]" 
                            />
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase text-[var(--color-dark)] mb-1">Sujet *</label>
                            <select required class="w-full px-4 py-2.5 bg-white border border-gray-300 text-sm focus:outline-none focus:border-[var(--color-primary)] text-gray-700">
                                <option value="">Choisir un sujet</option>
                                <option value="information">Demande d'information</option>
                                <option value="partenariat">Proposition de partenariat</option>
                                <option value="benevolat">Devenir bénévole</option>
                                <option value="autre">Autre demande</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-[var(--color-dark)] mb-1">Message *</label>
                        <textarea 
                            required 
                            rows="5" 
                            placeholder="Expliquez-nous votre demande en quelques lignes..." 
                            class="w-full px-4 py-2.5 bg-white border border-gray-300 text-sm focus:outline-none focus:border-[var(--color-primary)]"
                        ></textarea>
                    </div>

                    <div class="pt-2 flex items-center justify-between">
                        <span class="text-xs text-[var(--color-gray)]">* Champs obligatoires</span>
                        <button 
                            type="submit" 
                            class="bg-[var(--color-primary)] hover:bg-[var(--color-primary-dark)] text-white font-bold px-8 py-3 text-sm transition-colors uppercase tracking-wider"
                        >
                            Envoyer le message <i class="fa-solid fa-arrow-right ml-2" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- CARTE DE LOCALISATION (MAP) -->
        <div class="mt-12">
            <div class="bg-[var(--color-dark)] text-white p-3 text-xs font-bold uppercase tracking-wider flex justify-between items-center">
                <span>Emplacement du siège social</span>
                <span class="text-[var(--color-accent)] font-normal text-xs">Kpalimé, Togo</span>
            </div>
            <div class="h-64 w-full bg-gray-200">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126909.12345678!2d1.18!3d6.13!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1021576a00000000%3A0x0!2sKpalimé%2C%20Togo!5e0!3m2!1sfr!2s!4v1600000000000" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>

    </div>
</section>

@endsection