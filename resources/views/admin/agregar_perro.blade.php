@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="row">
            @component('components.menuAdmin')
            
            @endcomponent
            <div class="col-lg-9">
                <div class="container shadow" style="border-radius: 1rem;">
                    <form action="{{route('agregarPerro')}}" method="POST">
                        @csrf
                        <br>
                        <h2>Agregar perro</h2>
                        <div style="min-height: 70px; margin-top: 13px;">
                            @if (Session::has('mensaje'))
                            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                                 Se agrego un nuevo perro al sistema. <a href=""></a>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                              @endif
                        </div>
                        <p>Nombre del perro</p>
                        @if($errors->has('nombre'))
                        <div style="color: red; font-size: .9rem;">Por favor, introduzca un nombre que mínimo contenga 3 letras y máximo 30.</div>
                        @endif
                        <input type="text" name="nombre" class="form-control" required value="{{old('nombre')}}" placeholder="">
                        <br>
                        <p>Raza del perro</p>
                        <select class="form-select" name="raza">
                            <option value="Sin especificar">Sin especificar</option>                          
                            <option value="Affenpinscher">	Affenpinscher	</option>
                            <option value="Airedale terrier">	Airedale terrier	</option>
                            <option value="Akita">	Akita	</option>
                            <option value="Akita americano">	Akita americano	</option>
                            <option value="Alaskan Husky">	Alaskan Husky	</option>
                            <option value="Alaskan malamute">	Alaskan malamute	</option>
                            <option value="American Foxhound">	American Foxhound	</option>
                            <option value="American pit bull terrier">	American pit bull terrier	</option>
                            <option value="American staffordshire terrier">	American staffordshire terrier	</option>
                            <option value="Ariegeois">	Ariegeois	</option>
                            <option value="Artois">	Artois	</option>
                            <option value="Australian silky terrier">	Australian silky terrier	</option>
                            <option value="Australian Terrier">	Australian Terrier	</option>
                            <option value="Austrian Black & Tan Hound">	Austrian Black & Tan Hound	</option>
                            <option value="Azawakh">	Azawakh	</option>
                            <option value="Balkan Hound">	Balkan Hound	</option>
                            <option value="Basenji">	Basenji	</option>
                            <option value="Basset Alpino (Alpine Dachsbracke)">	Basset Alpino (Alpine Dachsbracke)	</option>
                            <option value="Basset Artesiano Normando">	Basset Artesiano Normando	</option>
                            <option value="Basset Azul de Gascuña (Basset Bleu de Gascogne)">	Basset Azul de Gascuña (Basset Bleu de Gascogne)	</option>
                            <option value="Basset de Artois">	Basset de Artois	</option>
                            <option value="Basset de Westphalie">	Basset de Westphalie	</option>
                            <option value="Basset Hound">	Basset Hound	</option>
                            <option value="Basset Leonado de Bretaña (Basset fauve de Bretagne)">	Basset Leonado de Bretaña (Basset fauve de Bretagne)	</option>
                            <option value="Bavarian Mountain Scenthound">	Bavarian Mountain Scenthound	</option>
                            <option value="Beagle">	Beagle	</option>
                            <option value="Beagle Harrier">	Beagle Harrier	</option>
                            <option value="Beauceron">	Beauceron	</option>
                            <option value="Bedlington Terrier">	Bedlington Terrier	</option>
                            <option value="Bichon Boloñes">	Bichon Boloñes	</option>
                            <option value="Bichón Frisé">	Bichón Frisé	</option>
                            <option value="Bichón Habanero">	Bichón Habanero	</option>
                            <option value="Billy">	Billy	</option>
                            <option value="Black and Tan Coonhound">	Black and Tan Coonhound	</option>
                            <option value="Bloodhound (Sabueso de San Huberto)">	Bloodhound (Sabueso de San Huberto)	</option>
                            <option value="Bobtail">	Bobtail	</option>
                            <option value="Boerboel">	Boerboel	</option>
                            <option value="Border Collie">	Border Collie	</option>
                            <option value="Border terrier">	Border terrier	</option>
                            <option value="Borzoi">	Borzoi	</option>
                            <option value="Bosnian Hound">	Bosnian Hound	</option>
                            <option value="Boston terrier">	Boston terrier	</option>
                            <option value="Bouvier des Flandres">	Bouvier des Flandres	</option>
                            <option value="Boxer">	Boxer	</option>
                            <option value="Boyero de Appenzell">	Boyero de Appenzell	</option>
                            <option value="Boyero de Australia">	Boyero de Australia	</option>
                            <option value="Boyero de Entlebuch">	Boyero de Entlebuch	</option>
                            <option value="Boyero de las Ardenas">	Boyero de las Ardenas	</option>
                            <option value="Boyero de Montaña Bernes">	Boyero de Montaña Bernes	</option>
                            <option value="Braco Alemán de pelo corto">	Braco Alemán de pelo corto	</option>
                            <option value="Braco Alemán de pelo duro">	Braco Alemán de pelo duro	</option>
                            <option value="Braco de Ariege">	Braco de Ariege	</option>
                            <option value="Braco de Auvernia">	Braco de Auvernia	</option>
                            <option value="Braco de Bourbonnais">	Braco de Bourbonnais	</option>
                            <option value="Braco de Saint Germain">	Braco de Saint Germain	</option>
                            <option value="Braco Dupuy">	Braco Dupuy	</option>
                            <option value="Braco Francés">	Braco Francés	</option>
                            <option value="Braco Italiano">	Braco Italiano	</option>
                            <option value="Broholmer">	Broholmer	</option>
                            <option value="Buhund Noruego">	Buhund Noruego	</option>
                            <option value="Bull terrier">	Bull terrier	</option>
                            <option value="Bulldog americano">	Bulldog americano	</option>
                            <option value="Bulldog inglés">	Bulldog inglés	</option>
                            <option value="Bulldog francés">	Bulldog francés	</option>
                            <option value="Bullmastiff">	Bullmastiff	</option>
                            <option value="Ca de Bestiar">	Ca de Bestiar	</option>
                            <option value="Cairn terrier">	Cairn terrier	</option>
                            <option value="Cane Corso">	Cane Corso	</option>
                            <option value="Cane da Pastore Maremmano-Abruzzese">	Cane da Pastore Maremmano-Abruzzese	</option>
                            <option value="Caniche (Poodle)">	Caniche (Poodle)	</option>
                            <option value="Caniche Toy (Toy Poodle)">	Caniche Toy (Toy Poodle)	</option>
                            <option value="Cao da Serra de Aires">	Cao da Serra de Aires	</option>
                            <option value="Cao da Serra de Estrela">	Cao da Serra de Estrela	</option>
                            <option value="Cao de Castro Laboreiro">	Cao de Castro Laboreiro	</option>
                            <option value="Cao de Fila de Sao Miguel">	Cao de Fila de Sao Miguel	</option>
                            <option value="Cavalier King Charles Spaniel">	Cavalier King Charles Spaniel	</option>
                            <option value="Cesky Fousek">	Cesky Fousek	</option>
                            <option value="Cesky Terrier">	Cesky Terrier	</option>
                            <option value="Chesapeake Bay Retriever">	Chesapeake Bay Retriever	</option>
                            <option value="Chihuahua">	Chihuahua	</option>
                            <option value="Chin">	Chin	</option>
                            <option value="Chow Chow">	Chow Chow	</option>
                            <option value="Cirneco del Etna">	Cirneco del Etna	</option>
                            <option value="Clumber Spaniel">	Clumber Spaniel	</option>
                            <option value="Cocker Spaniel Americano">	Cocker Spaniel Americano	</option>
                            <option value="Cocker Spaniel Inglés">	Cocker Spaniel Inglés	</option>
                            <option value="Collie Barbudo">	Collie Barbudo	</option>
                            <option value="Collie de Pelo Cort">	Collie de Pelo Cort	</option>
                            <option value="Collie de Pelo Largo">	Collie de Pelo Largo	</option>
                            <option value="Cotón de Tuléar">	Cotón de Tuléar	</option>
                            <option value="Curly Coated Retriever">	Curly Coated Retriever	</option>
                            <option value="Dálmata">	Dálmata	</option>
                            <option value="Dandie dinmont terrier">	Dandie dinmont terrier	</option>
                            <option value="Deerhound">	Deerhound	</option>
                            <option value="Dobermann">	Dobermann	</option>
                            <option value="Dogo Argentino">	Dogo Argentino	</option>
                            <option value="Dogo de Burdeos">	Dogo de Burdeos	</option>
                            <option value="Dogo del Tibet">	Dogo del Tibet	</option>
                            <option value="Drentse Partridge Dog">	Drentse Partridge Dog	</option>
                            <option value="Drever">	Drever	</option>
                            <option value="Dunker">	Dunker	</option>
                            <option value="Elkhound Noruego">	Elkhound Noruego	</option>
                            <option value="Elkhound Sueco">	Elkhound Sueco	</option>
                            <option value="English Foxhound">	English Foxhound	</option>
                            <option value="English Springer Spaniel">	English Springer Spaniel	</option>
                            <option value="English Toy Terrier">	English Toy Terrier	</option>
                            <option value="Epagneul Picard">	Epagneul Picard	</option>
                            <option value="Eurasier">	Eurasier	</option>
                            <option value="Fila Brasileiro">	Fila Brasileiro	</option>
                            <option value="Finnish Lapphound">	Finnish Lapphound	</option>
                            <option value="Flat Coated Retriever">	Flat Coated Retriever	</option>
                            <option value="Fox terrier de pelo de alambre">	Fox terrier de pelo de alambre	</option>
                            <option value="Fox terrier de pelo liso">	Fox terrier de pelo liso	</option>
                            <option value="Foxhound Inglés">	Foxhound Inglés	</option>
                            <option value="Frisian Pointer">	Frisian Pointer	</option>
                            <option value="Galgo Español">	Galgo Español	</option>
                            <option value="Galgo húngaro (Magyar Agar)">	Galgo húngaro (Magyar Agar)	</option>
                            <option value="Galgo Italiano">	Galgo Italiano	</option>
                            <option value="Galgo Polaco (Chart Polski)">	Galgo Polaco (Chart Polski)	</option>
                            <option value="Glen of Imaal Terrier">	Glen of Imaal Terrier	</option>
                            <option value="Golden Retriever">	Golden Retriever	</option>
                            <option value="Gordon Setter">	Gordon Setter	</option>
                            <option value="Gos d'Atura Catalá">	Gos d'Atura Catalá	</option>
                            <option value="Gran Basset Griffon Vendeano">	Gran Basset Griffon Vendeano	</option>
                            <option value="Gran Boyero Suizo">	Gran Boyero Suizo	</option>
                            <option value="Gran Danés (Dogo Aleman)">	Gran Danés (Dogo Aleman)	</option>
                            <option value="Gran Gascón Saintongeois">	Gran Gascón Saintongeois	</option>
                            <option value="Gran Griffon Vendeano">	Gran Griffon Vendeano	</option>
                            <option value="Gran Munsterlander">	Gran Munsterlander	</option>
                            <option value="Gran Perro Japonés">	Gran Perro Japonés	</option>
                            <option value="Grand Anglo Francais Tricoleur">	Grand Anglo Francais Tricoleur	</option>
                            <option value="Grand Bleu de Gascogne">	Grand Bleu de Gascogne	</option>
                            <option value="Greyhound">	Greyhound	</option>
                            <option value="Griffon Bleu de Gascogne">	Griffon Bleu de Gascogne	</option>
                            <option value="Griffon de pelo duro (Grifón Korthals)">	Griffon de pelo duro (Grifón Korthals)	</option>
                            <option value="Griffon leonado de Bretaña">	Griffon leonado de Bretaña	</option>
                            <option value="Griffon Nivernais">	Griffon Nivernais	</option>
                            <option value="Grifon Belga">	Grifon Belga	</option>
                            <option value="Grifón de Bruselas">	Grifón de Bruselas	</option>
                            <option value="Haldenstoever">	Haldenstoever	</option>
                            <option value="Harrier">	Harrier	</option>
                            <option value="Hokkaido">	Hokkaido	</option>
                            <option value="Hovawart">	Hovawart	</option>
                            <option value="Husky Siberiano (Siberian Husky)">	Husky Siberiano (Siberian Husky)	</option>
                            <option value="Ioujnorousskaia Ovtcharka">	Ioujnorousskaia Ovtcharka	</option>
                            <option value="Irish Glen of Imaal terrier">	Irish Glen of Imaal terrier	</option>
                            <option value="Irish soft coated wheaten terrier">	Irish soft coated wheaten terrier	</option>
                            <option value="Irish terrier">	Irish terrier	</option>
                            <option value="Irish Water Spaniel">	Irish Water Spaniel	</option>
                            <option value="Irish Wolfhound">	Irish Wolfhound	</option>
                            <option value="Jack Russell terrier">	Jack Russell terrier	</option>
                            <option value="Jindo Coreano">	Jindo Coreano	</option>
                            <option value="Kai">	Kai	</option>
                            <option value="Keeshond">	Keeshond	</option>
                            <option value="Kelpie australiano (Australian kelpie)">	Kelpie australiano (Australian kelpie)	</option>
                            <option value="Kerry blue terrier">	Kerry blue terrier	</option>
                            <option value="King Charles Spaniel">	King Charles Spaniel	</option>
                            <option value="Kishu">	Kishu	</option>
                            <option value="Komondor">	Komondor	</option>
                            <option value="Kooiker">	Kooiker	</option>
                            <option value="Kromfohrländer">	Kromfohrländer	</option>
                            <option value="Kuvasz">	Kuvasz	</option>
                            <option value="Labrador Retriever">	Labrador Retriever	</option>
                            <option value="Lagotto Romagnolo">	Lagotto Romagnolo	</option>
                            <option value="Laika de Siberia Occidental">	Laika de Siberia Occidental	</option>
                            <option value="Laika de Siberia Oriental">	Laika de Siberia Oriental	</option>
                            <option value="Laika Ruso Europeo">	Laika Ruso Europeo	</option>
                            <option value="Lakeland terrier">	Lakeland terrier	</option>
                            <option value="Landseer">	Landseer	</option>
                            <option value="Lapphund Sueco">	Lapphund Sueco	</option>
                            <option value="Lebrel Afgano">	Lebrel Afgano	</option>
                            <option value="Lebrel Arabe (Sloughi)">	Lebrel Arabe (Sloughi)	</option>
                            <option value="Leonberger">	Leonberger	</option>
                            <option value="Lhasa Apso">	Lhasa Apso	</option>
                            <option value="Lowchen (Pequeño Perro León)">	Lowchen (Pequeño Perro León)	</option>
                            <option value="Lundehund Noruego">	Lundehund Noruego	</option>
                            <option value="Malamute de Alaska">	Malamute de Alaska	</option>
                            <option value="Maltés">	Maltés	</option>
                            <option value="Manchester terrier">	Manchester terrier	</option>
                            <option value="Mastiff">	Mastiff	</option>
                            <option value="Mastín de los Pirineos">	Mastín de los Pirineos	</option>
                            <option value="Mastín Español">	Mastín Español	</option>
                            <option value="Mastín Napolitano">	Mastín Napolitano	</option>
                            <option value="Mudi">	Mudi	</option>
                            <option value="Norfolk terrier">	Norfolk terrier	</option>
                            <option value="Norwich terrier">	Norwich terrier	</option>
                            <option value="Nova Scotia duck tolling retriever">	Nova Scotia duck tolling retriever	</option>
                            <option value="Ovejero alemán">	Ovejero alemán	</option>
                            <option value="Otterhound">	Otterhound	</option>
                            <option value="Pug">	Pug	</option>
                            <option value="Pastor Alemán">	Pastor Alemán	</option>
                            <option value="Pastor Belga">	Pastor Belga	</option>
                            <option value="Rafeiro do Alentejo">	Rafeiro do Alentejo	</option>
                            <option value="Ratonero Bodeguero Andaluz">	Ratonero Bodeguero Andaluz	</option>
                            <option value="Retriever de Nueva Escocia">	Retriever de Nueva Escocia	</option>
                            <option value="Rhodesian Ridgeback">	Rhodesian Ridgeback	</option>
                            <option value="Ridgeback de Tailandia">	Ridgeback de Tailandia	</option>
                            <option value="Rottweiler">	Rottweiler	</option>
                            <option value="Saarloos">	Saarloos	</option>
                            <option value="Sabueso de Hamilton">	Sabueso de Hamilton	</option>
                            <option value="Sabueso de Hannover">	Sabueso de Hannover	</option>
                            <option value="Sabueso de Hygen">	Sabueso de Hygen	</option>
                            <option value="Sabueso de Istria">	Sabueso de Istria	</option>
                            <option value="Sabueso de Posavaz">	Sabueso de Posavaz	</option>
                            <option value="Sabueso de Schiller (Schillerstovare)">	Sabueso de Schiller (Schillerstovare)	</option>
                            <option value="Sabueso de Smaland (Smalandsstovare)">	Sabueso de Smaland (Smalandsstovare)	</option>
                            <option value="Sabueso de Transilvania">	Sabueso de Transilvania	</option>
                            <option value="Sabueso del Tirol">	Sabueso del Tirol	</option>
                            <option value="Sabueso Español">	Sabueso Español	</option>
                            <option value="Sabueso Estirio de pelo duro">	Sabueso Estirio de pelo duro	</option>
                            <option value="Sabueso Finlandés">	Sabueso Finlandés	</option>
                            <option value="Sabueso Francés blanco y negro">	Sabueso Francés blanco y negro	</option>
                            <option value="Sabueso Francés tricolor">	Sabueso Francés tricolor	</option>
                            <option value="Sabueso Griego">	Sabueso Griego	</option>
                            <option value="Sabueso Polaco (Ogar Polski)">	Sabueso Polaco (Ogar Polski)	</option>
                            <option value="Sabueso Serbio">	Sabueso Serbio	</option>
                            <option value="Sabueso Suizo">	Sabueso Suizo	</option>
                            <option value="Sabueso Yugoslavo de Montaña">	Sabueso Yugoslavo de Montaña	</option>
                            <option value="Sabueso Yugoslavo tricolor">	Sabueso Yugoslavo tricolor	</option>
                            <option value="Saluki">	Saluki	</option>
                            <option value="Samoyedo">	Samoyedo	</option>
                            <option value="San Bernardo">	San Bernardo	</option>
                            <option value="Sarplaninac">	Sarplaninac	</option>
                            <option value="Schapendoes">	Schapendoes	</option>
                            <option value="Schipperke">	Schipperke	</option>
                            <option value="Schnauzer estándar">	Schnauzer estándar	</option>
                            <option value="Schnauzer gigante (Riesenschnauzer)">	Schnauzer gigante (Riesenschnauzer)	</option>
                            <option value="Schnauzer miniatura (Zwergschnauzer)">	Schnauzer miniatura (Zwergschnauzer)	</option>
                            <option value="Scottish terrier">	Scottish terrier	</option>
                            <option value="Sealyham terrier">	Sealyham terrier	</option>
                            <option value="Segugio Italiano">	Segugio Italiano	</option>
                            <option value="Seppala Siberiano">	Seppala Siberiano	</option>
                            <option value="Setter Inglés">	Setter Inglés	</option>
                            <option value="Setter Irlandés">	Setter Irlandés	</option>
                            <option value="Setter Irlandés rojo y blanco">	Setter Irlandés rojo y blanco	</option>
                            <option value="Shar Pei">	Shar Pei	</option>
                            <option value="Shiba Inu">	Shiba Inu	</option>
                            <option value="Shih Tzu">	Shih Tzu	</option>
                            <option value="Shikoku">	Shikoku	</option>
                            <option value="Skye terrier">	Skye terrier	</option>
                            <option value="Slovensky Cuvac">	Slovensky Cuvac	</option>
                            <option value="Slovensky Kopov">	Slovensky Kopov	</option>
                            <option value="Smoushond Holandés">	Smoushond Holandés	</option>
                            <option value="Spaniel Alemán (German Wachtelhund)">	Spaniel Alemán (German Wachtelhund)	</option>
                            <option value="Spaniel Azul de Picardía">	Spaniel Azul de Picardía	</option>
                            <option value="Spaniel Bretón">	Spaniel Bretón	</option>
                            <option value="Spaniel de Campo">	Spaniel de Campo	</option>
                            <option value="Spaniel de Pont Audemer">	Spaniel de Pont Audemer	</option>
                            <option value="Spaniel Francés">	Spaniel Francés	</option>
                            <option value="Spaniel Tibetano">	Spaniel Tibetano	</option>
                            <option value="Spinone Italiano">	Spinone Italiano	</option>
                            <option value="Spítz Alemán">	Spítz Alemán	</option>
                            <option value="Spitz de Norbotten (Norbottenspets)">	Spitz de Norbotten (Norbottenspets)	</option>
                            <option value="Spitz Finlandés">	Spitz Finlandés	</option>
                            <option value="Spitz Japonés">	Spitz Japonés	</option>
                            <option value="Staffordshire bull terrier">	Staffordshire bull terrier	</option>
                            <option value="Staffordshire terrier americano">	Staffordshire terrier americano	</option>
                            <option value="Sussex Spaniel">	Sussex Spaniel	</option>
                            <option value="Teckel (Dachshund)">	Teckel (Dachshund)	</option>
                            <option value="Tchuvatch eslovaco">	Tchuvatch eslovaco	</option>
                            <option value="Terranova (Newfoundland)">	Terranova (Newfoundland)	</option>
                            <option value="Terrier australiano (Australian terrier)">	Terrier australiano (Australian terrier)	</option>
                            <option value="Terrier brasilero">	Terrier brasilero	</option>
                            <option value="Terrier cazador alemán">	Terrier cazador alemán	</option>
                            <option value="Terrier checo (Ceský teriér)">	Terrier checo (Ceský teriér)	</option>
                            <option value="Terrier galés">	Terrier galés	</option>
                            <option value="Terrier irlandés (Irish terrier)">	Terrier irlandés (Irish terrier)	</option>
                            <option value="Terrier japonés (Nihon teria)">	Terrier japonés (Nihon teria)	</option>
                            <option value="Terrier negro ruso">	Terrier negro ruso	</option>
                            <option value="Terrier tibetano">	Terrier tibetano	</option>
                            <option value="Tosa">	Tosa	</option>
                            <option value="Viejo Pastor Inglés">	Viejo Pastor Inglés	</option>
                            <option value="Viejo Pointer Danés (Old Danish Pointer)">	Viejo Pointer Danés (Old Danish Pointer)	</option>
                            <option value="Vizsla">	Vizsla	</option>
                            <option value="Volpino Italiano">	Volpino Italiano	</option>
                            <option value="Weimaraner">	Weimaraner	</option>
                            <option value="Welsh springer spaniel">	Welsh springer spaniel	</option>
                            <option value="Welsh Corgi Cardigan">	Welsh Corgi Cardigan	</option>
                            <option value="Welsh Corgi Pembroke">	Welsh Corgi Pembroke	</option>
                            <option value="Welsh terrier">	Welsh terrier	</option>
                            <option value="West highland white terrier">	West highland white terrier	</option>
                            <option value="Whippet">	Whippet	</option>
                            <option value="Wirehaired solvakian pointer">	Wirehaired solvakian pointer	</option>
                            <option value="Xoloitzcuintle">	Xoloitzcuintle	</option>
                            <option value="Yorkshire Terrier">	Yorkshire Terrier	</option>
                        </select>
                        <br>
                        <p>Edad del perro (años)</p>
                        <input type="number" required min="0" max="20" name="edad" class="form-control" value="@if(old('edad')){{old('edad')}}@else{{0}}@endif" placeholder="">
                        <br>
                        <p>Peso del perro (kg)</p>
                        <input type="number" min="0" required max="100" name="peso" class="form-control" value="@if(old('peso')){{old('peso')}}@else{{0}}@endif" placeholder="">
                        <br>
                        <p>Sexo del perro</p>
                        <select class="form-select" name="sexo">
                            <option value="0" selected>Macho</option>
                            <option value="1">Hembra</option>
                        </select>
                        <br>
                        <p>Descripción del perro.</p>
                        <textarea class="form-control" rows="10" name="descripcion">{{old('descripcion')}}</textarea>
                        <br>
                        <p>Disponibilidad del perro</p>
                        <select class="form-select" name="disponibilidad">
                            <option value="0" selected>Disponible <i style="color: #00cb00;" class="fa-solid fa-circle"></i></option>
                            <option value="1">No disponible <i style="color: red;" class="fa-solid fa-circle"></i></option>
                        </select>
                        <br>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
                        </div>
                        <br>

                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection