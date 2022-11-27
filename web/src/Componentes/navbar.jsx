import React from 'react'
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom'
import 'bootstrap/dist/css/bootstrap.min.css';
import Carrusel from './carrusel';
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
export default function navbar() {
  return (
    <div className='Container-nav'>
      <Router>
        <nav class="navbar navbar-dark bg-dark">
          <div className="container-fluid">
            <ul className="navbar-nav me-auto">
              <Link className="nav-link" to="/Carrusel">Carrusel</Link>
            </ul>
          </div>
        </nav>
        {/* definicion de rutas para paginas */}
        <Routes>
          <Route path="/Carrusel" element={<Carrusel />} />
        </Routes>
      </Router>
    </div>
  )
}
