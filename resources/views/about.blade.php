@extends('partial.main_layout')
@section('main')
    <div class="bg-black w-full text-white flex rounded-xl mt-4 mb-4">
        <div class="flex-none w-48 m-10">
            <img src="{{ asset('storage/'.$main_content->profile_photo) }}" alt="foto profile" class="w-48 aspect-square object-cover">
        </div>
        <div class="flex-1 mt-10 mr-10 mb-10">
            <div class="mb-5">
                <h1 class="text-xl font-bold">About Me</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum doloremque soluta, rerum quis tenetur sint nisi. Itaque voluptate commodi accusantium voluptates quia laborum incidunt! Commodi tenetur, necessitatibus delectus fugiat aut quod at voluptatum, voluptatem exercitationem debitis laboriosam dolorum sit. Ad, exercitationem voluptas assumenda provident sint incidunt aut unde nihil eligendi!
                </p>
            </div>
            <div>
                <h1 class="text-xl font-bold">My Contact</h1>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href=""><i class="bi bi-envelope"></i></a>
                <a href=""><i class="bi bi-github"></i></a>
            </div>
        </div>
    </div>
    <div class=" grid grid-cols-3 gap-4">
        <div class="col-span-1 bg-black rounded-xl text-white p-4">
            <h1 class=" font-bold text-xl text-center mb-2">Identity</h1>
            <ul>
                <li>Name : Daffa Fairuz</li>
                <li>Address : jln melati raya 6b</li>
                <li>Occupation : web developer</li>
                <li>Degree : S1-Informatika</li>
            </ul>
        </div>
        <div class="col-span-2 grid-rows-2 text-white">
            <div class=" bg-black rounded-xl text-center mb-4 p-2">
                <ul class=" inline-flex space-x-4 font-bold">
                    <li><button onclick="showCard('education')" class=" hover:underline">Education</button></li>
                    <li><button onclick="showCard('project')" class=" hover:underline">Project</button></li>
                </ul>
            </div>
            <div class=" bg-black rounded-xl">
                <div id="education" class=" p-2">
                    <h1 class=" font-bold text-center">Education</h1>
                    <div class="grid grid-cols-2">
                        <div>
                            <ul>
                                <li>SEKOLAHNYA</li>
                                <li>1</li>
                                <li>1</li>
                            </ul>
                        </div>
                        <div class="flex justify-end">
                            <ul>
                                <li>TAHUNNYA</li>
                                <li>2</li>
                                <li>2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="project" class="hidden p-2">
                    ini adalah project
                </div>
            </div>
        </div>
    </div>
    <script>
        function showCard(card){
            document.getElementById('education').classList.add('hidden')
            document.getElementById('project').classList.add('hidden')

            if (card === 'education'){
                document.getElementById('education').classList.remove('hidden')
            }
            else{
                document.getElementById('project').classList.remove('hidden')
            }
        }
    </script>
@endsection
