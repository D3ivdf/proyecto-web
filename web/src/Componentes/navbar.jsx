import React from 'react'
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import Carrusel from './carrusel';
import Login from './Login';
import Registrarce from './Registrarce';
import '../Estilos/navbar.css';
import Mapa from './Mapa'
export default function navbar() {
  return (
    <div className='Container-nav'>
      <Router>
        <nav className="navbar navbar-expand-lg bg-primary">
          <div className="container-fluid">
            <Link className="navbar-brand" to="/">Navbar</Link>
            <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarSupportedContent">
              <ul className="navbar-nav nav-items mb-2 mb-lg-0">
                <li className="nav-item">
                  <Link className="nav-link" to="/">Inicio</Link>
                </li>
                <li class="nav-item">
                  <Link className="nav-link" to="/Registrarce">Registrarce</Link>
                </li>
                <li className="nav-item">
                  <Link className="nav-link" to="/Login">Inicio de sesion</Link>
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
