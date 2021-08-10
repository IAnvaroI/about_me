@extends('main')

@section('content')
    @if (session()->has('success'))
        <div id="successMessage">
            @if(is_array(session('success')))
                <ul>
                    @foreach (session('success') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('success') }}
            @endif
        </div>
    @endif
    <div id="notTechInfo">
        <b id="name">Andriy</b>
        <br>
        <b id="surname">Romanov</b>
        <img id="photo"
             src="https://images.unsplash.com/photo-1529736576495-1ed4a29ca7e1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=676&q=80"
             alt=""/>
        <div class="notTechSections" id="contact">
            <b class="sectionName">Contact</b>
            <hr>
            <b>Address:</b>
            <br>
            Lviv
            <br><br>
            <b>Phone:</b>
            <br>
            (+38) 098 357 97 99
            <br><br>
            <b>Email:</b>
            <br>
            anvaro2406@gmail.com
            <br><br>
            <b>LinkedIn:</b>
            <br>
            linklinklink
        </div>
        <div class="notTechSections" id="languages">
            <b class="sectionName">Languages</b>
            <hr>
            English - B1
            <br>
            Russian - B1
        </div>
        <div class="notTechSections" id="hobbies">
            <b class="sectionName">Hobbies</b>
            <hr>
            <ul>
                <li>Reading</li>
                <li>Arduino programming</li>
                <li>Listening to music</li>
                <li>Handcrafting</li>
            </ul>
        </div>
    </div>
    <div id="techInfo">
        <div class="techSections" id="summary">
            <b class="sectionName">Summary</b>
            <hr>
            Junior Web Developer specializing in back-end development. Have no commercial experience. Well-versed in
            numerous technologies including HTML5, CSS and Bootstrap, PHP and Laravel, Javascript, MySQL.
        </div>
        <div class="techSections" id="skills">
            <b class="sectionName">Skill Highlights</b>
            <hr>
            <div id="leftSkillsColumn">
                <ul>
                    <li>Hardworking</li>
                    <li>Hardworking</li>
                    <li>Hardworking</li>
                </ul>
            </div>
            <div id="rightSkillsColumn">
                <ul>
                    <li>Hardworking</li>
                    <li>Hardworking</li>
                    <li>Hardworking</li>
                </ul>
            </div>

        </div>
        <div class="techSections" id="experience">
            <b class="sectionName">Experience</b>
            <hr>
            Have no experience
        </div>
        <div class="techSections" id="education">
            <b class="sectionName">Education</b>
            <hr>
            Third-year student of Lviv Polytechnic National University: Software Department
        </div>
        <div class="techSections" id="certifications">
            <b class="sectionName">Certifications</b>
            <hr>
            Have no certifications
        </div>
    </div>
@endsection
