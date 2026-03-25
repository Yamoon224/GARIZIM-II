<x-home-layout>
    <section class="page-header padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-heading mt-40 text-center">
                <h4 class="sub-heading">Our Projects</h4>
                <h2>Transforming The Ideas<br>And Visions For <span>Industries!</span></h2>
                <p>Construction is a general term meaning the art and science to <br>form objects systems organizations.
                </p>
            </div>
            <!-- /.section-heading -->
        </div>
    </section>
    <!-- /.page-header -->

    <section class="project-section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="project-filter text-center">
                        <li class="active" data-filter="*">All Projects</li>
                        <li data-filter=".architecture ">Architecture</li>
                        <li data-filter=".building">Building</li>
                        <li data-filter=".construction">Construction</li>
                        <li data-filter=".industrial">Industrial</li>
                    </ul>
                </div>
            </div>
            <div class="project-items grid dl-lb-gallery row">
                <div class="col-lg-4 col-md-6 padding-15 single-item architecture building">
                    <div class="project-item">
                        <div class="project-thumb">
                            <img src="{{ asset('images/project-1-768x600%20.jpg') }}" alt="project">
                            <div class="project-view">
                                <a class="dl-lightbox" href="{{ asset('images/project-1.jpg') }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <a href="projec-4-col.html" class="cat">Architecture</a>
                            <h3><a href='/industrus/project-details'>The Burj Khalifa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item construction building">
                    <div class="project-item">
                        <div class="project-thumb">
                            <img src="{{ asset('images/project-2-768x600.jpg') }}" alt="project">
                            <div class="project-view">
                                <a class="dl-lightbox" href="{{ asset('images/project-2.jpg') }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <a href="projec-4-col.html" class="cat">Construction</a>
                            <h3><a href='/industrus/project-details'>Shun Hing Square</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item construction architecture">
                    <div class="project-item">
                        <div class="project-thumb">
                            <img src="{{ asset('images/project-3-768x600.jpg') }}" alt="project">
                            <div class="project-view">
                                <a class="dl-lightbox" href="{{ asset('images/project-3.jpg') }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <a href="projec-4-col.html" class="cat">Building</a>
                            <h3><a href='/industrus/project-details'>World Trade Center</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item architecture building">
                    <div class="project-item">
                        <div class="project-thumb">
                            <img src="{{ asset('images/project-6-768x600.jpg') }}" alt="project">
                            <div class="project-view">
                                <a class="dl-lightbox" href="{{ asset('images/project-6.jpg') }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <a href="projec-4-col.html" class="cat">Industries</a>
                            <h3><a href='/industrus/project-details'>Mercury City Tower</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item construction industrial">
                    <div class="project-item">
                        <div class="project-thumb">
                            <img src="{{ asset('images/project-4-768x600.jpg') }}" alt="project">
                            <div class="project-view">
                                <a class="dl-lightbox" href="{{ asset('images/project-4.jpg') }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <a href="projec-4-col.html" class="cat">Building</a>
                            <h3><a href='/industrus/project-details'>Central Park Tower</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15 single-item industrial building">
                    <div class="project-item">
                        <div class="project-thumb">
                            <img src="{{ asset('images/project-5-768x600.jpg') }}" alt="project">
                            <div class="project-view">
                                <a class="dl-lightbox" href="{{ asset('images/project-5.jpg') }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <a href="projec-4-col.html" class="cat">Construction</a>
                            <h3><a href='/industrus/project-details'>Vincom Landmark 81</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.project-section-->
</x-home-layout>
