import React from 'react'
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import Carrusel from './carrusel';
import Login from './Login';
import Registrarce from './Registrarce';
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import Mapa from './Mapa'
export default function navbar() {
  return (
    <div className='Container-nav'>
      <Router>
        <nav class="navbar navbar-dark bg-dark">
          <div className="container-fluid">
            <ul className="navbar-nav me-auto">
              <Link className="nav-link" to="/">Inicio</Link>
              <Link className="nav-link" to="/Registrarce">Registrarce</Link>
              <Link className="nav-link" to="/Login">Inicio de sesion</Link>
            </ul>
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
