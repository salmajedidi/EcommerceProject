<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="pt-5 pb-4" style="text-align: center!important">
          <a href="/" style="text-align: center!important"><img src="{{asset('/assets/img/logo.png')}}" alt=""></a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 mt-1">
      <!-- Users -->
      <li class="menu-item users active">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user-circle"></i>
          <div data-i18n="Analytics">Users</div>
        </a>
      </li>

      <!-- Produits -->
      <li class="menu-item products">
        <a href="{{route('product.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cube-alt"></i>
          <div data-i18n="Layouts">Produits</div>
        </a>
      </li>

      <!-- fournisseurs -->
      <li class="menu-item fournisseurs">
        <a href="{{route('fournisseur.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user"></i>
          <div data-i18n="Layouts">Fournisseurs</div>
        </a>
      </li>

      <!-- catégories -->
      <li class="menu-item categorie">
        <a href="{{route('categorie.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-category"></i>
          <div data-i18n="Layouts">Catégories</div>
        </a>
      </li>

      <!-- Commandes -->
      <li class="menu-item commande">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Commandes</div>
        </a>
      </li>

    </ul>
  </aside>