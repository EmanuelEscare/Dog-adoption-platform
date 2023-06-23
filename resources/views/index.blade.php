@extends('layouts.home')
@section('content')
{{-- @section('title', 'Realizar pedido') --}}
@php
$gos = "Gos d'Atura Catalá";    
@endphp
<div class="container">
  <br>
  <div style="min-height: 70px;">
    @if (Session::has('mensaje'))
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
         Se elimino tu cuenta con exito.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
</div>
  <br>
    <div style="border-radius: 1rem;" class="container bg-primary">
        <br>
        <div class="row">
            <div class="col">
              <div class="container">
                <p style="text-align: center;">
                    <h1 class="text-white">Adopta la mascota perfecta</h1>
                    <p class="text-white">adopta la mascota perfecta</p>
                    <br>
                    <form action="{{route('buscarPerro')}}" method="POST">
                      @csrf
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <p class="text-white">Edad</p>
                          <select class="form-select" name="edad" aria-label="Default select example">
                            <option value="100">Cualquiera</option>
                            <option value="0">0 años</option>
                            <option value="1">1	años</option>
                            <option value="2">2	años</option>
                            <option value="3">3	años</option>
                            <option value="4">4	años</option>
                            <option value="5">5	años</option>
                            <option value="6">6	años</option>
                            <option value="7">7	años</option>
                            <option value="8">8	años</option>
                            <option value="9">9	años</option>
                            <option value="10">10	años</option>
                            <option value="11">11	años</option>
                            <option value="12">12	años</option>
                            <option value="13">13	años</option>
                            <option value="14">14	años</option>
                            <option value="15">15	años</option>
                            <option value="16">16	años</option>
                            <option value="17">17	años</option>
                            <option value="18">18	años</option>
                            <option value="19">19	años</option>
                            <option value="20">20	años</option>
                          </select>
                          {{-- <input type="select" class="form-control" placeholder=""> --}}
                        </div>
                        <div class="col">
                          <p class="text-white">Raza</p>
                          <select class="form-select" name="raza" aria-label="Default select example">
                            <option value="0"> Cualquiera</option>
                            <option value="Sin especificar" @if(old('raza') == 'Sin especificar') selected @endif>Sin especificar</option>                          
                            <option value="Affenpinscher" @if(old('raza') == 'Affenpinscher') selected @endif>	Affenpinscher	</option>
                            <option value="Airedale terrier" @if(old('raza') == 'Airedale terrier') selected @endif>	Airedale terrier	</option>
                            <option value="Akita" @if(old('raza') == 'Akita') selected @endif>	Akita	</option>
                            <option value="Akita americano" @if(old('raza') == 'Akita americano') selected @endif>	Akita americano	</option>
                            <option value="Alaskan Husky" @if(old('raza') == 'Alaskan Husky') selected @endif>	Alaskan Husky	</option>
                            <option value="Alaskan malamute" @if(old('raza') == 'Alaskan malamute') selected @endif>	Alaskan malamute	</option>
                            <option value="American Foxhound" @if(old('raza') == 'American Foxhound') selected @endif>	American Foxhound	</option>
                            <option value="American pit bull terrier" @if(old('raza') == 'American pit bull terrier') selected @endif>	American pit bull terrier	</option>
                            <option value="American staffordshire terrier" @if(old('raza') == 'American staffordshire terrier') selected @endif>	American staffordshire terrier	</option>
                            <option value="Ariegeois" @if(old('raza') == 'Ariegeois') selected @endif>	Ariegeois	</option>
                            <option value="Artois" @if(old('raza') == 'Artois') selected @endif>	Artois	</option>
                            <option value="Australian silky terrier" @if(old('raza') == 'Australian silky terrier') selected @endif>	Australian silky terrier	</option>
                            <option value="Australian Terrier" @if(old('raza') == 'Australian Terrier') selected @endif>	Australian Terrier	</option>
                            <option value="Austrian Black & Tan Hound" @if(old('raza') == 'Austrian Black & Tan Hound') selected @endif>	Austrian Black & Tan Hound	</option>
                            <option value="Azawakh" @if(old('raza') == 'Azawakh') selected @endif>	Azawakh	</option>
                            <option value="Balkan Hound" @if(old('raza') == 'Balkan Hound') selected @endif>	Balkan Hound	</option>
                            <option value="Basenji" @if(old('raza') == 'Basenji') selected @endif>	Basenji	</option>
                            <option value="Basset Alpino (Alpine Dachsbracke)" @if(old('raza') == 'Basset Alpino (Alpine Dachsbracke)') selected @endif>	Basset Alpino (Alpine Dachsbracke)	</option>
                            <option value="Basset Artesiano Normando" @if(old('raza') == 'Basset Artesiano Normando') selected @endif>	Basset Artesiano Normando	</option>
                            <option value="Basset Azul de Gascuña (Basset Bleu de Gascogne)" @if(old('raza') == 'Basset Azul de Gascuña (Basset Bleu de Gascogne)') selected @endif>	Basset Azul de Gascuña (Basset Bleu de Gascogne)	</option>
                            <option value="Basset de Artois" @if(old('raza') == 'Basset de Artois') selected @endif>	Basset de Artois	</option>
                            <option value="Basset de Westphalie" @if(old('raza') == 'Basset de Westphalie') selected @endif>	Basset de Westphalie	</option>
                            <option value="Basset Hound" @if(old('raza') == 'Basset Hound') selected @endif>	Basset Hound	</option>
                            <option value="Basset Leonado de Bretaña (Basset fauve de Bretagne)" @if(old('raza') == 'Basset Leonado de Bretaña (Basset fauve de Bretagne)') selected @endif>	Basset Leonado de Bretaña (Basset fauve de Bretagne)	</option>
                            <option value="Bavarian Mountain Scenthound" @if(old('raza') == 'Bavarian Mountain Scenthound') selected @endif>	Bavarian Mountain Scenthound	</option>
                            <option value="Beagle" @if(old('raza') == 'Beagle') selected @endif>	Beagle	</option>
                            <option value="Beagle Harrier" @if(old('raza') == 'Beagle Harrier') selected @endif>	Beagle Harrier	</option>
                            <option value="Beauceron" @if(old('raza') == 'Beauceron') selected @endif>	Beauceron	</option>
                            <option value="Bedlington Terrier" @if(old('raza') == 'Bedlington Terrier') selected @endif>	Bedlington Terrier	</option>
                            <option value="Bichon Boloñes" @if(old('raza') == 'Bichon Boloñes') selected @endif>	Bichon Boloñes	</option>
                            <option value="Bichón Frisé" @if(old('raza') == 'Bichón Frisé') selected @endif>	Bichón Frisé	</option>
                            <option value="Bichón Habanero" @if(old('raza') == 'Bichón Habanero') selected @endif>	Bichón Habanero	</option>
                            <option value="Billy" @if(old('raza') == 'Billy') selected @endif>	Billy	</option>
                            <option value="Black and Tan Coonhound" @if(old('raza') == 'Black and Tan Coonhound') selected @endif>	Black and Tan Coonhound	</option>
                            <option value="Bloodhound (Sabueso de San Huberto)" @if(old('raza') == 'Bloodhound (Sabueso de San Huberto)') selected @endif>	Bloodhound (Sabueso de San Huberto)	</option>
                            <option value="Bobtail" @if(old('raza') == 'Bobtail') selected @endif>	Bobtail	</option>
                            <option value="Boerboel" @if(old('raza') == 'Boerboel') selected @endif>	Boerboel	</option>
                            <option value="Border Collie" @if(old('raza') == 'Border Collie') selected @endif>	Border Collie	</option>
                            <option value="Border terrier" @if(old('raza') == 'Border terrier') selected @endif>	Border terrier	</option>
                            <option value="Borzoi" @if(old('raza') == 'Borzoi') selected @endif>	Borzoi	</option>
                            <option value="Bosnian Hound" @if(old('raza') == 'Bosnian Hound') selected @endif>	Bosnian Hound	</option>
                            <option value="Boston terrier" @if(old('raza') == 'Boston terrier') selected @endif>	Boston terrier	</option>
                            <option value="Bouvier des Flandres" @if(old('raza') == 'Bouvier des Flandres') selected @endif>	Bouvier des Flandres	</option>
                            <option value="Boxer" @if(old('raza') == 'Boxer') selected @endif>	Boxer	</option>
                            <option value="Boyero de Appenzell" @if(old('raza') == 'Boyero de Appenzell') selected @endif>	Boyero de Appenzell	</option>
                            <option value="Boyero de Australia" @if(old('raza') == 'Boyero de Australia') selected @endif>	Boyero de Australia	</option>
                            <option value="Boyero de Entlebuch" @if(old('raza') == 'Boyero de Entlebuch') selected @endif>	Boyero de Entlebuch	</option>
                            <option value="Boyero de las Ardenas" @if(old('raza') == 'Boyero de las Ardenas') selected @endif>	Boyero de las Ardenas	</option>
                            <option value="Boyero de Montaña Bernes" @if(old('raza') == 'Boyero de Montaña Bernes') selected @endif>	Boyero de Montaña Bernes	</option>
                            <option value="Braco Alemán de pelo corto" @if(old('raza') == 'Braco Alemán de pelo corto') selected @endif>	Braco Alemán de pelo corto	</option>
                            <option value="Braco Alemán de pelo duro" @if(old('raza') == 'Braco Alemán de pelo duro') selected @endif>	Braco Alemán de pelo duro	</option>
                            <option value="Braco de Ariege" @if(old('raza') == 'Braco de Ariege') selected @endif>	Braco de Ariege	</option>
                            <option value="Braco de Auvernia" @if(old('raza') == 'Braco de Auvernia') selected @endif>	Braco de Auvernia	</option>
                            <option value="Braco de Bourbonnais" @if(old('raza') == 'Braco de Bourbonnais') selected @endif>	Braco de Bourbonnais	</option>
                            <option value="Braco de Saint Germain" @if(old('raza') == 'Braco de Saint Germain') selected @endif>	Braco de Saint Germain	</option>
                            <option value="Braco Dupuy" @if(old('raza') == 'Braco Dupuy') selected @endif>	Braco Dupuy	</option>
                            <option value="Braco Francés" @if(old('raza') == 'Braco Francés') selected @endif>	Braco Francés	</option>
                            <option value="Braco Italiano" @if(old('raza') == 'Braco Italiano') selected @endif>	Braco Italiano	</option>
                            <option value="Broholmer" @if(old('raza') == 'Broholmer') selected @endif>	Broholmer	</option>
                            <option value="Buhund Noruego" @if(old('raza') == 'Buhund Noruego') selected @endif>	Buhund Noruego	</option>
                            <option value="Bull terrier" @if(old('raza') == 'Bull terrier') selected @endif>	Bull terrier	</option>
                            <option value="Bulldog americano" @if(old('raza') == 'Bulldog americano') selected @endif>	Bulldog americano	</option>
                            <option value="Bulldog inglés" @if(old('raza') == 'Bulldog inglés') selected @endif>	Bulldog inglés	</option>
                            <option value="Bulldog francés" @if(old('raza') == 'Bulldog francés') selected @endif>	Bulldog francés	</option>
                            <option value="Bullmastiff" @if(old('raza') == 'Bullmastiff') selected @endif>	Bullmastiff	</option>
                            <option value="Ca de Bestiar" @if(old('raza') == 'Ca de Bestiar') selected @endif>	Ca de Bestiar	</option>
                            <option value="Cairn terrier" @if(old('raza') == 'Cairn terrier') selected @endif>	Cairn terrier	</option>
                            <option value="Cane Corso" @if(old('raza') == 'Cane Corso') selected @endif>	Cane Corso	</option>
                            <option value="Cane da Pastore Maremmano-Abruzzese" @if(old('raza') == 'Cane da Pastore Maremmano-Abruzzese') selected @endif>	Cane da Pastore Maremmano-Abruzzese	</option>
                            <option value="Caniche (Poodle)" @if(old('raza') == 'Caniche (Poodle)') selected @endif>	Caniche (Poodle)	</option>
                            <option value="Caniche Toy (Toy Poodle)" @if(old('raza') == 'Caniche Toy (Toy Poodle)') selected @endif>	Caniche Toy (Toy Poodle)	</option>
                            <option value="Cao da Serra de Aires" @if(old('raza') == 'Cao da Serra de Aires') selected @endif>	Cao da Serra de Aires	</option>
                            <option value="Cao da Serra de Estrela" @if(old('raza') == 'Cao da Serra de Estrela') selected @endif>	Cao da Serra de Estrela	</option>
                            <option value="Cao de Castro Laboreiro" @if(old('raza') == 'Cao de Castro Laboreiro') selected @endif>	Cao de Castro Laboreiro	</option>
                            <option value="Cao de Fila de Sao Miguel" @if(old('raza') == 'Cao de Fila de Sao Miguel') selected @endif>	Cao de Fila de Sao Miguel	</option>
                            <option value="Cavalier King Charles Spaniel" @if(old('raza') == 'Cavalier King Charles Spaniel') selected @endif>	Cavalier King Charles Spaniel	</option>
                            <option value="Cesky Fousek" @if(old('raza') == 'Cesky Fousek') selected @endif>	Cesky Fousek	</option>
                            <option value="Cesky Terrier" @if(old('raza') == 'Cesky Terrier') selected @endif>	Cesky Terrier	</option>
                            <option value="Chesapeake Bay Retriever" @if(old('raza') == 'Chesapeake Bay Retriever') selected @endif>	Chesapeake Bay Retriever	</option>
                            <option value="Chihuahua" @if(old('raza') == 'Chihuahua') selected @endif>	Chihuahua	</option>
                            <option value="Chin" @if(old('raza') == 'Chin') selected @endif>	Chin	</option>
                            <option value="Chow Chow" @if(old('raza') == 'Chow Chow') selected @endif>	Chow Chow	</option>
                            <option value="Cirneco del Etna" @if(old('raza') == 'Cirneco del Etna') selected @endif>	Cirneco del Etna	</option>
                            <option value="Clumber Spaniel" @if(old('raza') == 'Clumber Spaniel') selected @endif>	Clumber Spaniel	</option>
                            <option value="Cocker Spaniel Americano" @if(old('raza') == 'Cocker Spaniel Americano') selected @endif>	Cocker Spaniel Americano	</option>
                            <option value="Cocker Spaniel Inglés" @if(old('raza') == 'Cocker Spaniel Inglés') selected @endif>	Cocker Spaniel Inglés	</option>
                            <option value="Collie Barbudo" @if(old('raza') == 'Collie Barbudo') selected @endif>	Collie Barbudo	</option>
                            <option value="Collie de Pelo Cort" @if(old('raza') == 'Collie de Pelo Cort') selected @endif>	Collie de Pelo Cort	</option>
                            <option value="Collie de Pelo Largo" @if(old('raza') == 'Collie de Pelo Largo') selected @endif>	Collie de Pelo Largo	</option>
                            <option value="Cotón de Tuléar" @if(old('raza') == 'Cotón de Tuléar') selected @endif>	Cotón de Tuléar	</option>
                            <option value="Curly Coated Retriever" @if(old('raza') == 'Curly Coated Retriever') selected @endif>	Curly Coated Retriever	</option>
                            <option value="Dálmata" @if(old('raza') == 'Dálmata') selected @endif>	Dálmata	</option>
                            <option value="Dandie dinmont terrier" @if(old('raza') == 'Dandie dinmont terrier') selected @endif>	Dandie dinmont terrier	</option>
                            <option value="Deerhound" @if(old('raza') == 'Deerhound') selected @endif>	Deerhound	</option>
                            <option value="Dobermann" @if(old('raza') == 'Dobermann') selected @endif>	Dobermann	</option>
                            <option value="Dogo Argentino" @if(old('raza') == 'Dogo Argentino') selected @endif>	Dogo Argentino	</option>
                            <option value="Dogo de Burdeos" @if(old('raza') == 'Dogo de Burdeos') selected @endif>	Dogo de Burdeos	</option>
                            <option value="Dogo del Tibet" @if(old('raza') == 'Dogo del Tibet') selected @endif>	Dogo del Tibet	</option>
                            <option value="Drentse Partridge Dog" @if(old('raza') == 'Drentse Partridge Dog') selected @endif>	Drentse Partridge Dog	</option>
                            <option value="Drever" @if(old('raza') == 'Drever') selected @endif>	Drever	</option>
                            <option value="Dunker" @if(old('raza') == 'Dunker') selected @endif>	Dunker	</option>
                            <option value="Elkhound Noruego" @if(old('raza') == 'Elkhound Noruego') selected @endif>	Elkhound Noruego	</option>
                            <option value="Elkhound Sueco" @if(old('raza') == 'Elkhound Sueco') selected @endif>	Elkhound Sueco	</option>
                            <option value="English Foxhound" @if(old('raza') == 'English Foxhound') selected @endif>	English Foxhound	</option>
                            <option value="English Springer Spaniel" @if(old('raza') == 'English Springer Spaniel') selected @endif>	English Springer Spaniel	</option>
                            <option value="English Toy Terrier" @if(old('raza') == 'English Toy Terrier') selected @endif>	English Toy Terrier	</option>
                            <option value="Epagneul Picard" @if(old('raza') == 'Epagneul Picard') selected @endif>	Epagneul Picard	</option>
                            <option value="Eurasier" @if(old('raza') == 'Eurasier') selected @endif>	Eurasier	</option>
                            <option value="Fila Brasileiro" @if(old('raza') == 'Fila Brasileiro') selected @endif>	Fila Brasileiro	</option>
                            <option value="Finnish Lapphound" @if(old('raza') == 'Finnish Lapphound') selected @endif>	Finnish Lapphound	</option>
                            <option value="Flat Coated Retriever" @if(old('raza') == 'Flat Coated Retriever') selected @endif>	Flat Coated Retriever	</option>
                            <option value="Fox terrier de pelo de alambre" @if(old('raza') == 'Fox terrier de pelo de alambre') selected @endif>	Fox terrier de pelo de alambre	</option>
                            <option value="Fox terrier de pelo liso" @if(old('raza') == 'Fox terrier de pelo liso') selected @endif>	Fox terrier de pelo liso	</option>
                            <option value="Foxhound Inglés" @if(old('raza') == 'Foxhound Inglés') selected @endif>	Foxhound Inglés	</option>
                            <option value="Frisian Pointer" @if(old('raza') == 'Frisian Pointer') selected @endif>	Frisian Pointer	</option>
                            <option value="Galgo Español" @if(old('raza') == 'Galgo Español') selected @endif>	Galgo Español	</option>
                            <option value="Galgo húngaro (Magyar Agar)" @if(old('raza') == 'Galgo húngaro (Magyar Agar)') selected @endif>	Galgo húngaro (Magyar Agar)	</option>
                            <option value="Galgo Italiano" @if(old('raza') == 'Galgo Italiano') selected @endif>	Galgo Italiano	</option>
                            <option value="Galgo Polaco (Chart Polski)" @if(old('raza') == 'Galgo Polaco (Chart Polski)') selected @endif>	Galgo Polaco (Chart Polski)	</option>
                            <option value="Glen of Imaal Terrier" @if(old('raza') == 'Glen of Imaal Terrier') selected @endif>	Glen of Imaal Terrier	</option>
                            <option value="Golden Retriever" @if(old('raza') == 'Golden Retriever') selected @endif>	Golden Retriever	</option>
                            <option value="Gordon Setter" @if(old('raza') == 'Gordon Setter') selected @endif>	Gordon Setter	</option>
                            <option value="{{$gos}}" @if(old('raza') == $gos) selected @endif>	Gos d'Atura Catalá	</option>
                            <option value="Gran Basset Griffon Vendeano" @if(old('raza') == 'Gran Basset Griffon Vendeano') selected @endif>	Gran Basset Griffon Vendeano	</option>
                            <option value="Gran Boyero Suizo" @if(old('raza') == 'Gran Boyero Suizo') selected @endif>	Gran Boyero Suizo	</option>
                            <option value="Gran Danés (Dogo Aleman)" @if(old('raza') == 'Gran Danés (Dogo Aleman)') selected @endif>	Gran Danés (Dogo Aleman)	</option>
                            <option value="Gran Gascón Saintongeois" @if(old('raza') == 'Gran Gascón Saintongeois') selected @endif>	Gran Gascón Saintongeois	</option>
                            <option value="Gran Griffon Vendeano" @if(old('raza') == 'Gran Griffon Vendeano') selected @endif>	Gran Griffon Vendeano	</option>
                            <option value="Gran Munsterlander" @if(old('raza') == 'Gran Munsterlander') selected @endif>	Gran Munsterlander	</option>
                            <option value="Gran Perro Japonés" @if(old('raza') == 'Gran Perro Japonés') selected @endif>	Gran Perro Japonés	</option>
                            <option value="Grand Anglo Francais Tricoleur" @if(old('raza') == 'Grand Anglo Francais Tricoleur') selected @endif>	Grand Anglo Francais Tricoleur	</option>
                            <option value="Grand Bleu de Gascogne" @if(old('raza') == 'Grand Bleu de Gascogne') selected @endif>	Grand Bleu de Gascogne	</option>
                            <option value="Greyhound" @if(old('raza') == 'Greyhound') selected @endif>	Greyhound	</option>
                            <option value="Griffon Bleu de Gascogne" @if(old('raza') == 'Griffon Bleu de Gascogne') selected @endif>	Griffon Bleu de Gascogne	</option>
                            <option value="Griffon de pelo duro (Grifón Korthals)" @if(old('raza') == 'Griffon de pelo duro (Grifón Korthals)') selected @endif>	Griffon de pelo duro (Grifón Korthals)	</option>
                            <option value="Griffon leonado de Bretaña" @if(old('raza') == 'Griffon leonado de Bretaña') selected @endif>	Griffon leonado de Bretaña	</option>
                            <option value="Griffon Nivernais" @if(old('raza') == 'Griffon Nivernais') selected @endif>	Griffon Nivernais	</option>
                            <option value="Grifon Belga" @if(old('raza') == 'Grifon Belga') selected @endif>	Grifon Belga	</option>
                            <option value="Grifón de Bruselas" @if(old('raza') == 'Grifón de Bruselas') selected @endif>	Grifón de Bruselas	</option>
                            <option value="Haldenstoever" @if(old('raza') == 'Haldenstoever') selected @endif>	Haldenstoever	</option>
                            <option value="Harrier" @if(old('raza') == 'Harrier') selected @endif>	Harrier	</option>
                            <option value="Hokkaido" @if(old('raza') == 'Hokkaido') selected @endif>	Hokkaido	</option>
                            <option value="Hovawart" @if(old('raza') == 'Hovawart') selected @endif>	Hovawart	</option>
                            <option value="Husky Siberiano (Siberian Husky)" @if(old('raza') == 'Husky Siberiano (Siberian Husky)') selected @endif>	Husky Siberiano (Siberian Husky)	</option>
                            <option value="Ioujnorousskaia Ovtcharka" @if(old('raza') == 'Ioujnorousskaia Ovtcharka') selected @endif>	Ioujnorousskaia Ovtcharka	</option>
                            <option value="Irish Glen of Imaal terrier" @if(old('raza') == 'Irish Glen of Imaal terrier') selected @endif>	Irish Glen of Imaal terrier	</option>
                            <option value="Irish soft coated wheaten terrier" @if(old('raza') == 'Irish soft coated wheaten terrier') selected @endif>	Irish soft coated wheaten terrier	</option>
                            <option value="Irish terrier" @if(old('raza') == 'Irish terrier') selected @endif>	Irish terrier	</option>
                            <option value="Irish Water Spaniel" @if(old('raza') == 'Irish Water Spaniel') selected @endif>	Irish Water Spaniel	</option>
                            <option value="Irish Wolfhound" @if(old('raza') == 'Irish Wolfhound') selected @endif>	Irish Wolfhound	</option>
                            <option value="Jack Russell terrier" @if(old('raza') == 'Jack Russell terrier') selected @endif>	Jack Russell terrier	</option>
                            <option value="Jindo Coreano" @if(old('raza') == 'Jindo Coreano') selected @endif>	Jindo Coreano	</option>
                            <option value="Kai" @if(old('raza') == 'Kai') selected @endif>	Kai	</option>
                            <option value="Keeshond" @if(old('raza') == 'Keeshond') selected @endif>	Keeshond	</option>
                            <option value="Kelpie australiano (Australian kelpie)" @if(old('raza') == 'Kelpie australiano (Australian kelpie)') selected @endif>	Kelpie australiano (Australian kelpie)	</option>
                            <option value="Kerry blue terrier" @if(old('raza') == 'Kerry blue terrier') selected @endif>	Kerry blue terrier	</option>
                            <option value="King Charles Spaniel" @if(old('raza') == 'King Charles Spaniel') selected @endif>	King Charles Spaniel	</option>
                            <option value="Kishu" @if(old('raza') == 'Kishu') selected @endif>	Kishu	</option>
                            <option value="Komondor" @if(old('raza') == 'Komondor') selected @endif>	Komondor	</option>
                            <option value="Kooiker" @if(old('raza') == 'Kooiker') selected @endif>	Kooiker	</option>
                            <option value="Kromfohrländer" @if(old('raza') == 'Kromfohrländer') selected @endif>	Kromfohrländer	</option>
                            <option value="Kuvasz" @if(old('raza') == 'Kuvasz') selected @endif>	Kuvasz	</option>
                            <option value="Labrador Retriever" @if(old('raza') == 'Labrador Retriever') selected @endif>	Labrador Retriever	</option>
                            <option value="Lagotto Romagnolo" @if(old('raza') == 'Lagotto Romagnolo') selected @endif>	Lagotto Romagnolo	</option>
                            <option value="Laika de Siberia Occidental" @if(old('raza') == 'Laika de Siberia Occidental') selected @endif>	Laika de Siberia Occidental	</option>
                            <option value="Laika de Siberia Oriental" @if(old('raza') == 'Laika de Siberia Oriental') selected @endif>	Laika de Siberia Oriental	</option>
                            <option value="Laika Ruso Europeo" @if(old('raza') == 'Laika Ruso Europeo') selected @endif>	Laika Ruso Europeo	</option>
                            <option value="Lakeland terrier" @if(old('raza') == 'Lakeland terrier') selected @endif>	Lakeland terrier	</option>
                            <option value="Landseer" @if(old('raza') == 'Landseer') selected @endif>	Landseer	</option>
                            <option value="Lapphund Sueco" @if(old('raza') == 'Lapphund Sueco') selected @endif>	Lapphund Sueco	</option>
                            <option value="Lebrel Afgano" @if(old('raza') == 'Lebrel Afgano') selected @endif>	Lebrel Afgano	</option>
                            <option value="Lebrel Arabe (Sloughi)" @if(old('raza') == 'Lebrel Arabe (Sloughi)') selected @endif>	Lebrel Arabe (Sloughi)	</option>
                            <option value="Leonberger" @if(old('raza') == 'Leonberger') selected @endif>	Leonberger	</option>
                            <option value="Lhasa Apso" @if(old('raza') == 'Lhasa Apso') selected @endif>	Lhasa Apso	</option>
                            <option value="Lowchen (Pequeño Perro León)" @if(old('raza') == 'Lowchen (Pequeño Perro León)') selected @endif>	Lowchen (Pequeño Perro León)	</option>
                            <option value="Lundehund Noruego" @if(old('raza') == 'Lundehund Noruego') selected @endif>	Lundehund Noruego	</option>
                            <option value="Malamute de Alaska" @if(old('raza') == 'Malamute de Alaska') selected @endif>	Malamute de Alaska	</option>
                            <option value="Maltés" @if(old('raza') == 'Maltés') selected @endif>	Maltés	</option>
                            <option value="Manchester terrier" @if(old('raza') == 'Manchester terrier') selected @endif>	Manchester terrier	</option>
                            <option value="Mastiff" @if(old('raza') == 'Mastiff') selected @endif>	Mastiff	</option>
                            <option value="Mastín de los Pirineos" @if(old('raza') == 'Mastín de los Pirineos') selected @endif>	Mastín de los Pirineos	</option>
                            <option value="Mastín Español" @if(old('raza') == 'Mastín Español') selected @endif>	Mastín Español	</option>
                            <option value="Mastín Napolitano" @if(old('raza') == 'Mastín Napolitano') selected @endif>	Mastín Napolitano	</option>
                            <option value="Mudi" @if(old('raza') == 'Mudi') selected @endif>	Mudi	</option>
                            <option value="Norfolk terrier" @if(old('raza') == 'Norfolk terrier') selected @endif>	Norfolk terrier	</option>
                            <option value="Norwich terrier" @if(old('raza') == 'Norwich terrier') selected @endif>	Norwich terrier	</option>
                            <option value="Nova Scotia duck tolling retriever" @if(old('raza') == 'Nova Scotia duck tolling retriever') selected @endif>	Nova Scotia duck tolling retriever	</option>
                            {{-- <option value="Ovejero alemán" @if(old('raza') == 'Ovejero alemán') selected @endif>	Ovejero alemán	</option> --}}
                            <option value="Otterhound" @if(old('raza') == 'Otterhound') selected @endif>	Otterhound	</option>
                            <option value="Pug" @if(old('raza') == 'Pug') selected @endif>	Pug	</option>
                            <option value="Pastor Alemán" @if(old('raza') == 'Pastor Alemán') selected @endif>	Pastor Alemán	</option>
                            <option value="Pastor Belga" @if(old('raza') == 'Pastor Belga') selected @endif>	Pastor Belga	</option>
                            <option value="Rafeiro do Alentejo" @if(old('raza') == 'Rafeiro do Alentejo') selected @endif>	Rafeiro do Alentejo	</option>
                            <option value="Ratonero Bodeguero Andaluz" @if(old('raza') == 'Ratonero Bodeguero Andaluz') selected @endif>	Ratonero Bodeguero Andaluz	</option>
                            <option value="Retriever de Nueva Escocia" @if(old('raza') == 'Retriever de Nueva Escocia') selected @endif>	Retriever de Nueva Escocia	</option>
                            <option value="Rhodesian Ridgeback" @if(old('raza') == 'Rhodesian Ridgeback') selected @endif>	Rhodesian Ridgeback	</option>
                            <option value="Ridgeback de Tailandia" @if(old('raza') == 'Ridgeback de Tailandia') selected @endif>	Ridgeback de Tailandia	</option>
                            <option value="Rottweiler" @if(old('raza') == 'Rottweiler') selected @endif>	Rottweiler	</option>
                            <option value="Saarloos" @if(old('raza') == 'Saarloos') selected @endif>	Saarloos	</option>
                            <option value="Sabueso de Hamilton" @if(old('raza') == 'Sabueso de Hamilton') selected @endif>	Sabueso de Hamilton	</option>
                            <option value="Sabueso de Hannover" @if(old('raza') == 'Sabueso de Hannover') selected @endif>	Sabueso de Hannover	</option>
                            <option value="Sabueso de Hygen" @if(old('raza') == 'Sabueso de Hygen') selected @endif>	Sabueso de Hygen	</option>
                            <option value="Sabueso de Istria" @if(old('raza') == 'Sabueso de Istria') selected @endif>	Sabueso de Istria	</option>
                            <option value="Sabueso de Posavaz" @if(old('raza') == 'Sabueso de Posavaz') selected @endif>	Sabueso de Posavaz	</option>
                            <option value="Sabueso de Schiller (Schillerstovare)" @if(old('raza') == 'Sabueso de Schiller (Schillerstovare)') selected @endif>	Sabueso de Schiller (Schillerstovare)	</option>
                            <option value="Sabueso de Smaland (Smalandsstovare)" @if(old('raza') == 'Sabueso de Smaland (Smalandsstovare)') selected @endif>	Sabueso de Smaland (Smalandsstovare)	</option>
                            <option value="Sabueso de Transilvania" @if(old('raza') == 'Sabueso de Transilvania') selected @endif>	Sabueso de Transilvania	</option>
                            <option value="Sabueso del Tirol" @if(old('raza') == 'Sabueso del Tirol') selected @endif>	Sabueso del Tirol	</option>
                            <option value="Sabueso Español" @if(old('raza') == 'Sabueso Español') selected @endif>	Sabueso Español	</option>
                            <option value="Sabueso Estirio de pelo duro" @if(old('raza') == 'Sabueso Estirio de pelo duro') selected @endif>	Sabueso Estirio de pelo duro	</option>
                            <option value="Sabueso Finlandés" @if(old('raza') == 'Sabueso Finlandés') selected @endif>	Sabueso Finlandés	</option>
                            <option value="Sabueso Francés blanco y negro" @if(old('raza') == 'Sabueso Francés blanco y negro') selected @endif>	Sabueso Francés blanco y negro	</option>
                            <option value="Sabueso Francés tricolor" @if(old('raza') == 'Sabueso Francés tricolor') selected @endif>	Sabueso Francés tricolor	</option>
                            <option value="Sabueso Griego" @if(old('raza') == 'Sabueso Griego') selected @endif>	Sabueso Griego	</option>
                            <option value="Sabueso Polaco (Ogar Polski)" @if(old('raza') == 'Sabueso Polaco (Ogar Polski)') selected @endif>	Sabueso Polaco (Ogar Polski)	</option>
                            <option value="Sabueso Serbio" @if(old('raza') == 'Sabueso Serbio') selected @endif>	Sabueso Serbio	</option>
                            <option value="Sabueso Suizo" @if(old('raza') == 'Sabueso Suizo') selected @endif>	Sabueso Suizo	</option>
                            <option value="Sabueso Yugoslavo de Montaña" @if(old('raza') == 'Sabueso Yugoslavo de Montaña') selected @endif>	Sabueso Yugoslavo de Montaña	</option>
                            <option value="Sabueso Yugoslavo tricolor" @if(old('raza') == 'Sabueso Yugoslavo tricolor') selected @endif>	Sabueso Yugoslavo tricolor	</option>
                            <option value="Saluki" @if(old('raza') == 'Saluki') selected @endif>	Saluki	</option>
                            <option value="Samoyedo" @if(old('raza') == 'Samoyedo') selected @endif>	Samoyedo	</option>
                            <option value="San Bernardo" @if(old('raza') == 'San Bernardo') selected @endif>	San Bernardo	</option>
                            <option value="Sarplaninac" @if(old('raza') == 'Sarplaninac') selected @endif>	Sarplaninac	</option>
                            <option value="Schapendoes" @if(old('raza') == 'Schapendoes') selected @endif>	Schapendoes	</option>
                            <option value="Schipperke" @if(old('raza') == 'Schipperke') selected @endif>	Schipperke	</option>
                            <option value="Schnauzer estándar" @if(old('raza') == 'Schnauzer estándar') selected @endif>	Schnauzer estándar	</option>
                            <option value="Schnauzer gigante (Riesenschnauzer)" @if(old('raza') == 'Schnauzer gigante (Riesenschnauzer)') selected @endif>	Schnauzer gigante (Riesenschnauzer)	</option>
                            <option value="Schnauzer miniatura (Zwergschnauzer)" @if(old('raza') == 'Schnauzer miniatura (Zwergschnauzer)') selected @endif>	Schnauzer miniatura (Zwergschnauzer)	</option>
                            <option value="Scottish terrier" @if(old('raza') == 'Scottish terrier') selected @endif>	Scottish terrier	</option>
                            <option value="Sealyham terrier" @if(old('raza') == 'Sealyham terrier') selected @endif>	Sealyham terrier	</option>
                            <option value="Segugio Italiano" @if(old('raza') == 'Segugio Italiano') selected @endif>	Segugio Italiano	</option>
                            <option value="Seppala Siberiano" @if(old('raza') == 'Seppala Siberiano') selected @endif>	Seppala Siberiano	</option>
                            <option value="Setter Inglés" @if(old('raza') == 'Setter Inglés') selected @endif>	Setter Inglés	</option>
                            <option value="Setter Irlandés" @if(old('raza') == 'Setter Irlandés') selected @endif>	Setter Irlandés	</option>
                            <option value="Setter Irlandés rojo y blanco" @if(old('raza') == 'Setter Irlandés rojo y blanco') selected @endif>	Setter Irlandés rojo y blanco	</option>
                            <option value="Shar Pei" @if(old('raza') == 'Shar Pei') selected @endif>	Shar Pei	</option>
                            <option value="Shiba Inu" @if(old('raza') == 'Shiba Inu') selected @endif>	Shiba Inu	</option>
                            <option value="Shih Tzu" @if(old('raza') == 'Shih Tzu') selected @endif>	Shih Tzu	</option>
                            <option value="Shikoku" @if(old('raza') == 'Shikoku') selected @endif>	Shikoku	</option>
                            <option value="Skye terrier" @if(old('raza') == 'Skye terrier') selected @endif>	Skye terrier	</option>
                            <option value="Slovensky Cuvac" @if(old('raza') == 'Slovensky Cuvac') selected @endif>	Slovensky Cuvac	</option>
                            <option value="Slovensky Kopov" @if(old('raza') == 'Slovensky Kopov') selected @endif>	Slovensky Kopov	</option>
                            <option value="Smoushond Holandés" @if(old('raza') == 'Smoushond Holandés') selected @endif>	Smoushond Holandés	</option>
                            <option value="Spaniel Alemán (German Wachtelhund)" @if(old('raza') == 'Spaniel Alemán (German Wachtelhund)') selected @endif>	Spaniel Alemán (German Wachtelhund)	</option>
                            <option value="Spaniel Azul de Picardía" @if(old('raza') == 'Spaniel Azul de Picardía') selected @endif>	Spaniel Azul de Picardía	</option>
                            <option value="Spaniel Bretón" @if(old('raza') == 'Spaniel Bretón') selected @endif>	Spaniel Bretón	</option>
                            <option value="Spaniel de Campo" @if(old('raza') == 'Spaniel de Campo') selected @endif>	Spaniel de Campo	</option>
                            <option value="Spaniel de Pont Audemer" @if(old('raza') == 'Spaniel de Pont Audemer') selected @endif>	Spaniel de Pont Audemer	</option>
                            <option value="Spaniel Francés" @if(old('raza') == 'Spaniel Francés') selected @endif>	Spaniel Francés	</option>
                            <option value="Spaniel Tibetano" @if(old('raza') == 'Spaniel Tibetano') selected @endif>	Spaniel Tibetano	</option>
                            <option value="Spinone Italiano" @if(old('raza') == 'Spinone Italiano') selected @endif>	Spinone Italiano	</option>
                            <option value="Spítz Alemán" @if(old('raza') == 'Spítz Alemán') selected @endif>	Spítz Alemán	</option>
                            <option value="Spitz de Norbotten (Norbottenspets)" @if(old('raza') == 'Spitz de Norbotten (Norbottenspets)') selected @endif>	Spitz de Norbotten (Norbottenspets)	</option>
                            <option value="Spitz Finlandés" @if(old('raza') == 'Spitz Finlandés') selected @endif>	Spitz Finlandés	</option>
                            <option value="Spitz Japonés" @if(old('raza') == 'Spitz Japonés') selected @endif>	Spitz Japonés	</option>
                            <option value="Staffordshire bull terrier" @if(old('raza') == 'Staffordshire bull terrier') selected @endif>	Staffordshire bull terrier	</option>
                            <option value="Staffordshire terrier americano" @if(old('raza') == 'Staffordshire terrier americano') selected @endif>	Staffordshire terrier americano	</option>
                            <option value="Sussex Spaniel" @if(old('raza') == 'Sussex Spaniel') selected @endif>	Sussex Spaniel	</option>
                            <option value="Teckel (Dachshund)" @if(old('raza') == 'Teckel (Dachshund)') selected @endif>	Teckel (Dachshund)	</option>
                            <option value="Tchuvatch eslovaco" @if(old('raza') == 'Tchuvatch eslovaco') selected @endif>	Tchuvatch eslovaco	</option>
                            <option value="Terranova (Newfoundland)" @if(old('raza') == 'Terranova (Newfoundland)') selected @endif>	Terranova (Newfoundland)	</option>
                            <option value="Terrier australiano (Australian terrier)" @if(old('raza') == 'Terrier australiano (Australian terrier)') selected @endif>	Terrier australiano (Australian terrier)	</option>
                            <option value="Terrier brasilero" @if(old('raza') == 'Terrier brasilero') selected @endif>	Terrier brasilero	</option>
                            <option value="Terrier cazador alemán" @if(old('raza') == 'Terrier cazador alemán') selected @endif>	Terrier cazador alemán	</option>
                            <option value="Terrier checo (Ceský teriér)" @if(old('raza') == 'Terrier checo (Ceský teriér)') selected @endif>	Terrier checo (Ceský teriér)	</option>
                            <option value="Terrier galés" @if(old('raza') == 'Terrier galés') selected @endif>	Terrier galés	</option>
                            <option value="Terrier irlandés (Irish terrier)" @if(old('raza') == 'Terrier irlandés (Irish terrier)') selected @endif>	Terrier irlandés (Irish terrier)	</option>
                            <option value="Terrier japonés (Nihon teria)" @if(old('raza') == 'Terrier japonés (Nihon teria)') selected @endif>	Terrier japonés (Nihon teria)	</option>
                            <option value="Terrier negro ruso" @if(old('raza') == 'Terrier negro ruso') selected @endif>	Terrier negro ruso	</option>
                            <option value="Terrier tibetano" @if(old('raza') == 'Terrier tibetano') selected @endif>	Terrier tibetano	</option>
                            <option value="Tosa" @if(old('raza') == 'Tosa') selected @endif>	Tosa	</option>
                            <option value="Viejo Pastor Inglés" @if(old('raza') == 'Viejo Pastor Inglés') selected @endif>	Viejo Pastor Inglés	</option>
                            <option value="Viejo Pointer Danés (Old Danish Pointer)" @if(old('raza') == 'Viejo Pointer Danés (Old Danish Pointer)') selected @endif>	Viejo Pointer Danés (Old Danish Pointer)	</option>
                            <option value="Vizsla" @if(old('raza') == 'Vizsla') selected @endif>	Vizsla	</option>
                            <option value="Volpino Italiano" @if(old('raza') == 'Volpino Italiano') selected @endif>	Volpino Italiano	</option>
                            <option value="Weimaraner" @if(old('raza') == 'Weimaraner') selected @endif>	Weimaraner	</option>
                            <option value="Welsh springer spaniel" @if(old('raza') == 'Welsh springer spaniel') selected @endif>	Welsh springer spaniel	</option>
                            <option value="Welsh Corgi Cardigan" @if(old('raza') == 'Welsh Corgi Cardigan') selected @endif>	Welsh Corgi Cardigan	</option>
                            <option value="Welsh Corgi Pembroke" @if(old('raza') == 'Welsh Corgi Pembroke') selected @endif>	Welsh Corgi Pembroke	</option>
                            <option value="Welsh terrier" @if(old('raza') == 'Welsh terrier') selected @endif>	Welsh terrier	</option>
                            <option value="West highland white terrier" @if(old('raza') == 'West highland white terrier') selected @endif>	West highland white terrier	</option>
                            <option value="Whippet" @if(old('raza') == 'Whippet') selected @endif>	Whippet	</option>
                            <option value="Wirehaired solvakian pointer" @if(old('raza') == 'Wirehaired solvakian pointer') selected @endif>	Wirehaired solvakian pointer	</option>
                            <option value="Xoloitzcuintle" @if(old('raza') == 'Xoloitzcuintle') selected @endif>	Xoloitzcuintle	</option>
                            <option value="Yorkshire Terrier" @if(old('raza') == 'Yorkshire Terrier') selected @endif>	Yorkshire Terrier	</option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg boton" type="submit">Buscar</button>
                      </div>
                    </div>
                  </form>
                </p>
              </div>
              <br>
            </div>
            <div style="text-align: center;" class="col">
              <br>
                <img style="max-width: 300px;" src="{{asset('img/perro.png')}}" alt="">
              </div>
          </div>
          
    </div>
</div>
@endsection