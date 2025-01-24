{{-- Appel de la méthode props, on passe ensuite deux paramètres, un msg pour moduler le message et l'afficher, pareil pour le bg en cas de  réussite ou échec --}}
{{-- => 'bg-green-500' pour mettre une couleur par défaut à la prop --}}
@props(['msg', 'bg' => 'bg-green-500'])

{{-- Affichage du message --}}

<p class="text-white bg-green-500 rounded-md {{ $bg }}">{{ $msg }}</p>