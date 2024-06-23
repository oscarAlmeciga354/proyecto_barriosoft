<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Página Administrador - Barriosoft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="estilo_pagina_administrador.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="icon" href="/img/logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/logo.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div type="" href="pagina_administrador.html" class="logo">
            <img src="/img/logo.jpg" style="width: 60px; height: auto; border-radius: 60%;  margin-right: 20px">
            <span href="pagina_administrador.html"  class="nav-item">Barriosoft</span>
        </div>
        <nav>
            <ul class="menu">
                <li class="dropdown">
                    <a href="{{route('admin')}}" class="dropdown-toggle">Inicio</a>
                </li>
                <li class="dropdown">
                    <a href="gestion_usuarios_administrador.html" class="dropdown-toggle">Usuarios</a>
                </li>
                <li class="dropdown">
                    <a href="domicilios_administrador.html" class="dropdown-toggle">Productos</a>
                </li>
                <li class="dropdown">
                    <a href="ventas_administrador.html" class="dropdown-toggle">Ventas</a>
                </li>
                <li class="dropdown">
                    <a href="pedidos_administrador.html" class="dropdown-toggle">Pedidos</a>
                </li>
            </ul>
        </nav>
    @auth
    <ul class="dropdown">
        <a type="email" class="estilo-boton" style="margin-right: 9px" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="bi bi-person me-1"></i>&nbsp; {{ Auth::user()->name }}
        </a>
        <div class="dropdown-content">
            <a href="profile">Mi cuenta</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                {{ __('Cerrar sesión') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </ul>
    @endauth