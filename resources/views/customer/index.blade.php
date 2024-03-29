@extends('layout.authlayout')

@section('content')
{{-- Artistic banner --}}
@include('layout.tenantHeader')

@include('layout.nav')
   <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('https://images.pexels.com/photos/1292241/pexels-photo-1292241.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
        <div class="container">
            <h1 class="text-4xl text-white font-medium mb-4">
                Art Gallery
            </h1>
            <p class="text-xl text-white font-medium mb-4">
                Welcome to the world of art, where every brushstroke tells a story,<br>
                and every canvas is a window to the soul.
            </p>
            <div class="mt-12 hover:scale-105 hover:shadow-2xl transition">
                <a href="showartworks" class="bg-red-500 text-white px-8 py-3 font-medium rounded-2xl border border-white hover:text-white">Explore Art</a>
            </div>
        </div>
   </div>
{{-- End of artistic banner --}}

{{-- Events Showcase --}}
<div class="container py-16">
    <h2 class="text-4xl font-medium text-gray-800 mb-6 text-center">Events</h2>
    <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">
        <!-- Art Event 1 -->
        <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
            <img src="https://www.svgrepo.com/show/118486/calendar.svg" alt="1f" class="w-auto h-12 object-contain">
            <div>
                <h4 class="font-medium capitalize text-lg">Art Exhibition: "Brushstrokes of Life"</h4>
                <p class="text-gray-500 text-sm">Explore the vibrant world of contemporary art!</p>
            </div>
        </div>

        <!-- Art Event 2 -->
        <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
            <img src="https://www.svgrepo.com/show/118486/calendar.svg" alt="1f" class="w-auto h-12 object-contain">
            <div>
                <h4 class="font-medium capitalize text-lg">Workshop: "Mastering Mixed Media Techniques"</h4>
                <p class="text-gray-500 text-sm">Unlock your creativity with expert guidance!</p>
            </div>
        </div>

        <!-- Art Event 3 -->
        <div class="border border-primary rounded-md px-3 py-6 flex justify-center items-center gap-5">
            <img src="https://www.svgrepo.com/show/118486/calendar.svg" alt="1f" class="w-auto h-12 object-contain">
            <div>
                <h4 class="font-medium capitalize text-lg">Live Painting Demonstration: "The Art of Expression"</h4>
                <p class="text-gray-500 text-sm">Witness creativity in action!</p>
            </div>
        </div>
    </div>
</div>
{{-- End of Events Showcase --}}



{{-- Browse Art by Categories --}}
<div class="container py-16">
    <h2 class="text-3xl font-medium text-gray-800 mb-6">Explore by Category</h2>

    <div class="grid grid-cols-3 gap-3">
        <!-- Abstract -->
        <div class="relative rounded-sm overflow-hidden group">
            <img src="https://images.pexels.com/photos/1573434/pexels-photo-1573434.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-full h-48 object-cover">
            <a href="showproperty#location-id" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Abstract</a>
        </div>
        <!-- Surrealism -->
        <div class="relative rounded-sm overflow-hidden group">
            <img src="https://images.pexels.com/photos/288100/pexels-photo-288100.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-full h-48 object-cover">
            <a href="showproperty#property-id" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Surrealism</a>
        </div>
        <!-- Portraits -->
        <div class="relative rounded-sm overflow-hidden group">
            <img src="https://www.singulart.com/blog/wp-content/uploads/2023/10/Famous-Portrait-Paintings-848x530-1.jpg" class="w-full h-48 object-cover">
            <a href="showproperty#bedrooms-id" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Portraits</a>
        </div>
        <!-- Impressionism -->
        <div class="relative rounded-sm overflow-hidden group">
            <img src="https://smarthistory.org/wp-content/uploads/2019/04/Monet-Camille.jpg" class="w-full h-48 object-cover">
            <a href="showproperty#bathrooms-id"  class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Impressionism</a>
        </div>
        <!-- Landscapes -->
        <div class="relative rounded-sm overflow-hidden group">
            <img src="https://www.invaluable.com/blog/wp-content/uploads/sites/77/2020/07/CLAUDE-MONET-FIELD-OF-POPPIES-GIVERNY-1.jpg" class="w-full h-48 object-cover">
            <a href="showproperty#amenities-id" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Landscapes</a>
        </div>
        <!-- Still Life -->
        <!-- dadagan to wala tong id sa showproperty -->
        <div class="relative rounded-sm overflow-hidden group">
            <img src="https://cdn-blog.superprof.com/blog_gb/wp-content/uploads/2018/07/Paul_Cézanne_still-life-jug-and-fruits.jpg" class="w-full h-48 object-cover">
            <a href="showartworks#stilllife-id" class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition">Still Life</a>
        </div>
    </div>
</div>
{{-- End of Browse Art by Categories --}}


{{-- Artistic Property Showcase --}}
<div class="container mb-10 grid grid-cols-3 gap-3">
    {{-- Artwork cards --}}
    @foreach ($properties->unique('id')->take(4) as $property)
    {{-- Artwork card --}}
    <div class="bg-white shadow rounded overflow-hidden group">
        <div class="relative">
            {{-- Artwork image --}}
            <img src="{{ asset('/storage/images/' . optional($property->image)->image_path) }}" alt="Artwork Image" class="w-96 h-52">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                {{-- Your additional HTML or Blade code --}}
            </div>
        </div>

        {{-- Artwork details --}}
        <div class="pt-4 pb-3 px-4">
            <a href="#">
                <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">{{ optional($property->description)->title }}</h4>
            </a>
            <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                <p class="text-xl text-primary font-semibold">
                    @if ($property->monthly_rate)
                        Contact agent for price
                    @else
                        Price: {{ optional($property->rate)->monthly_rate }}
                        <br>
                        Artist: {{ optional($property->artist)->name}}
                    @endif
                </p>
            </div>
        </div>
        {{-- End of artwork details --}}

        {{-- Button to view artwork --}}
        <a href="{{ route('viewproperty', ['id' => $property->id]) }}" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View Artwork</a>
    </div>
    {{-- End of artwork card --}}
    @endforeach
    {{-- End of artwork cards --}}
</div>
{{-- End of Artistic Property Showcase --}}

{{-- Art-related Q&A --}}
<div class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container grid grdi-cols-1 py-4">
        <h3 class="text-black font-semibold text-xl py-5">Art: A Journey into Creativity</h3>
        <p class="text-gray-800 font-medium text-justify">
            Explore the world of art where creativity knows no bounds. Dive into the depths of imagination and emotion through the strokes of a brush or the lines of a sculpture.
            <br><br>
            Art transcends boundaries, offering a unique lens through which to view the world and understand the human experience. Join us on this journey of discovery and inspiration.
        </p>

        <h3 class="text-black font-semibold text-xl py-5">Art Rental: Bringing Masterpieces to Your Home</h3>
        <p class="text-gray-800 font-medium text-justify">
            Renting art allows you to bring the beauty of masterpieces into your home without the commitment of ownership. Whether you're looking to decorate your space or simply appreciate the work of talented artists, art rental offers a flexible and accessible way to enjoy art.
            <br><br>
            With a wide range of styles and mediums available for rent, you can curate your own personal gallery and rotate artworks to suit your mood and style. Experience the joy of living with art and let it inspire and enrich your life every day.
        </p>
    </div>
</div>
{{-- End of Art-related Q&A --}}

@include('layout.footer')

