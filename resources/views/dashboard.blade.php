<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="max-w-large text-center mx-auto">
                    <h1 class="text-3xl font-bold mb-4">¡Bienvenido a Agora!</h1>
                    <p class="text-black mb-4">Estás a punto de unirte a una comunidad en línea vibrante y
                        comprometida. Aquí tienes una descripción de las características disponibles para ti</p>

                    <div class="bg-blue-400 rounded-lg border-2 border-black p-6 mb-4">
                        <h2 class="text-2xl font-bold mb-4">Explora y participa en las conversaciones</h2>
                        <p class="text-black">Agora te ofrece una amplia variedad de hilos de conversación en
                            diferentes categorías. Explora los temas que te interesen, lee los mensajes de otros
                            usuarios y participa activamente en las discusiones.</p>
                    </div>

                    <div class="bg-blue-400 rounded-lg border-2 border-black p-6 mb-4">
                        <h2 class="text-2xl font-bold mb-4">Crea tus propios hilos de conversación</h2>
                        <p class="text-black">Si tienes una pregunta, un tema de debate o simplemente quieres
                            compartir tus pensamientos, puedes crear tus propios hilos de conversación. Aporta tus ideas
                            y permite que otros usuarios se sumen a la discusión.</p>
                    </div>

                    <div class="bg-blue-400 rounded-lg border-2 border-black p-6 mb-4">
                        <h2 class="text-2xl font-bold mb-4">Conecta con la comunidad</h2>
                        <p class="text-black">Interactúa con otros usuarios, comparte tus opiniones y conoce nuevas
                            personas. Agora te brinda la oportunidad de establecer conexiones significativas y construir
                            relaciones dentro de la comunidad.</p>
                    </div>

                    <div class="bg-blue-400 rounded-lg border-2 border-black p-6 mb-4">
                        <h2 class="text-2xl font-bold mb-4">Sigue las reglas y mantén un ambiente respetuoso</h2>
                        <p class="text-black">Es importante recordar que Agora es un espacio inclusivo y amigable.
                            Asegúrate de seguir las reglas establecidas, respetar las opiniones de los demás y
                            contribuir a un ambiente respetuoso y constructivo para todos.</p>
                    </div>

                    <div class="bg-blue-400 rounded-lg border-2 border-black p-6">
                        <h2 class="text-2xl font-bold mb-4">Disfruta de tu experiencia en Agora</h2>
                        <p class="text-black">¡Ahora estás listo para sumergirte en la comunidad de Agora! Disfruta
                            de la diversidad de opiniones, aprende de otros usuarios y aprovecha al máximo tu
                            experiencia en nuestra plataforma.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
