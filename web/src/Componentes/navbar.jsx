import React from 'react'
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import 'bootstrap-icons/font/bootstrap-icons.css';
import Carrusel from './carrusel';
import Login from './Login';
import Registrarce from './Registrarce';
import '../Estilos/navbar.css';
import Mapa from './Mapa'
import Logo from '../imagenes/logo.png'
export default function navbar() {
  return (
    <div className='Container-nav'>
      <Router>
        <nav className="navbar navbar-expand-lg">
          <div className="container-fluid contenedor">
            <Link className="navbar-brand" to="/"><img src={Logo} className='logo' alt='logo'/></Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarSupportedContent">
              <ul className="navbar-nav nav-items mb-2 mb-lg-0">
                <li className="nav-item">
                  <Link className="nav-link" to="/">Inicio<i class="bi bi-power"></i></Link>
                </li>
                <li class="nav-item">
                  <Link className="nav-link" to="/Registrarce">Registrarce <i class="bi bi-box-arrow-in-down"></i></Link>
                </li>
                <li className="nav-item">
                  <Link className="nav-link" to="/Login">Inicio de sesion <i class="bi bi-box-arrow-in-right"></i></Link>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        {/* definicion de rutas para paginas */}
        <Routes>
          <Route path="/" element={<Carrusel />} />
        </Routes>
        <Routes>
          <Route path="/Registrarce" element={<Registrarce />} />
        </Routes>
        <Routes>
          <Route path="/Login" element={<Login />} />
        </Routes>
        <Mapa />
      </Router>
    </div>
  );
}
