{{-- <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
                <li class="label">Main</li>
                <li><a href="#"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="#"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="#"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="#"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="#"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="#"><i class="ti-home"></i> Dashboard </a></li>

                <li class="label">Apps</li>
                
                <li class="label">Features</li>
                
                
                <li class="label">Form</li>
                
                <li class="label">Extra</li>
                

            </ul>
        </div>
    </div>
</div> --}}
<!-- /# sidebar -->


{{-- <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>Brico-Shop</span></a></div>
                <li class="label">Main</li>
                <li><a href="#"><i class="ti-home"></i> Tableau De Bord </a></li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-ruler-pencil"></i> Marques  
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="#">Liste des marques</a></li>
                        <li><a href="#">Nouveau marque</a></li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-gallery"></i> Bannières  
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('banner.index') }}">Liste des bannière</a></li>
                        <li><a href="{{ route('banner.create') }}">Nouveau bannière</a></li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-view-grid"></i> Categories  
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="#">Liste des categories</a></li>
                        <li><a href="#">Nouveau categorie</a></li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-package"></i> Produits  
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="#">Liste des produits</a></li>
                        <li><a href="#">Nouveau produits</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="ti-shopping-cart"></i> Paniers </a></li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-layers-alt"></i> Commandes  
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="#">Liste des commandes</a></li>
                        <li><a href="#">Nouveau commandes</a></li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-user"></i> Utilisateurs  
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="#">Admins</a></li>
                        <li><a href="#">Clients</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="ti-comment"></i> Commentaires </a></li>
                <li><a href="#"><i class="ti-settings"></i> Paramètres </a></li>
            </ul>
        </div>
    </div>
</div> --}}

<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main</li>
                    <li><a href="#"><i class="ti-home"></i><span class="nav-text">Tableau De Bord</span></a></li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-gallery"></i><span class="nav-text">Bannières</span>   
                        </a>
                        <ul>
                            <li><a href="{{ route('banner.index') }}">Liste des bannière</a></li>
                            <li><a href="{{ route('banner.create') }}">Nouveau bannière</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-view-grid"></i><span class="nav-text">Categories</span>
                        </a>
                        <ul>
                            <li><a href="#">Liste des categories</a></li>
                            <li><a href="#">Nouveau categorie</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-package"></i><span class="nav-text">Produits</span>
                        </a>
                        <ul>
                            <li><a href="#">Liste des produits</a></li>
                            <li><a href="#">Nouveau produits</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="ti-shopping-cart"></i><span class="nav-text">Paniers</span></a></li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-layers-alt"></i><span class="nav-text">Commandes</span>
                        </a>
                        <ul>
                            <li><a href="#">Liste des commandes</a></li>
                            <li><a href="#">Nouveau commandes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-user"></i><span class="nav-text">Utilisateurs</span>
                        </a>
                        <ul>
                            <li><a href="#">Admins</a></li>
                            <li><a href="#">Clients</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="ti-comment"></i><span class="nav-text">Commentaires<span></a></li>
                    <li><a href="#"><i class="ti-settings"></i><span class="nav-text">Paramètres</span> </a></li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->