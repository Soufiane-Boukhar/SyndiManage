<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <span class="title">SyndiManage</span>
                </div>

            </a>
        </li>


        <li>
            <a href="#">

                <span class="title">
                    <i class="fa-solid fa-house fa-xl iconsNav"></i><span class="item">Acceuil</span>
                </span>
            </a>
        </li>

        <li class="{{ request()->routeIs('emploiyeur.index') ? 'active' : '' }}">
            <a href="{{ route('emploiyeur.index') }}">
                <span class="title">
                    <i class="fas fa-user fa-xl iconsNav"></i>
                    <span class="item">Emploiyeurs</span>
                </span>
            </a>
        </li>


        <li>
            <a href="#">
                <span class="title">
                    <i class="fas fa-money-bill fa-xl iconsNav"></i>
                    <span class="item">Dépenses</span>
                </span>
            </a>
        </li>

        <li class="{{ request()->routeIs('paiement.index') ? 'active' : '' }}">
            <a href="{{ route('paiement.index') }}">
                <span class="title">
                    <i class="fas fa-credit-card fa-xl iconsNav"></i>
                    <span class="item">Paiement</span>
                </span>
            </a>
        </li>

        <li>
            <a href="#">

                <span class="title">
                    <i class="fas fa-money-check-alt fa-xl iconsNav"></i>
                    <span class="item">Mes transactions</span>
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}">
                <span class="title">
                    <i class="fa-solid fa-right-from-bracket fa-xl" style="color: #ab1212;"></i>
                    <span class="item">Déconnexion</span>
                </span>
            </a>
        </li>
    </ul>
</div>