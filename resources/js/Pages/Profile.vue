<template>
  <div class="profile-container">
    <div class="sidebar" :class="{ 'slide-in': slideIn }">
      <div class="profile-info">
        <img :src="userLogoUrl" alt="Profile Image" class="profile-image">
        <div class="sidebar-header">
          <img src="/images/logo.png" alt="Logo" class="sidebar-logo">
          <span class="sidebar-title">Pasangüino</span>
        </div>
      </div>
      <ul class="menu">
        <li>
          <!-- Futuros Elementos del menu -->
        </li>
      </ul>
    </div>
    <div class="main-content">
      <div class="header">
        <h1>Configuración</h1>
        <div class="user-dropdown">
          <i class="material-icons user-icon" style="font-size: 45px;">&#xe853;</i>
          <div class="dropdown-content">
            <a href="profile">Editar perfil</a>
            <a href="settings">Configuración</a>
            <a href="#">Cerrar sesión</a>
          </div>
        </div>
      </div>
      <hr>
      <div class="settings">
        <div class="settings-header">
          <div class="logo-upload">
            <label for="logo">Arrastra una foto para cambiar el logo:</label>
            <div id="logo" @drop.prevent="onFileDrop" @dragover.prevent @click="triggerFileInput">
              <input type="file" ref="fileInput" @change="onFileChange" style="display: none;">
              <p>Arrastra una imagen aquí o haz clic para seleccionar un archivo</p>
            </div>
          </div>
          <div class="save-button">
            <button @click="saveChanges" class="btn btn-outline">Guardar cambios</button>
          </div>
        </div>
        <div class="about-us">
          <label for="about">Acerca de</label>
          <textarea id="about" rows="3" v-model="aboutUs"></textarea>
        </div>
        <div class="location">
          <label for="location">Localización</label>
          <textarea id="location" rows="2" v-model="location"></textarea>
        </div>
        <div class="contact-info">
          <label for="email">Dirección de correo electrónico:</label>
          <input type="email" id="email" v-model="email">
          <label for="phone">Número de teléfono:</label>
          <input type="text" id="phone" v-model="phone">
        </div>
      </div>
    </div>

    <!-- Botón para desplazarse hacia arriba -->
    <div v-if="showReturnText" class="return-text">
      <button @click="scrollToTop">Volver al inicio</button>
    </div>
    
    <!-- Botón para volver a la página de inicio -->
    <div class="return-home">
      <a href="/home">Volver al Inicio</a>
    </div>

    <!-- Mensajes de éxito -->
    <div v-if="showSuccessMessage" class="success-message">
      <p>{{ successMessage }}</p>
    </div>
  </div>
</template>

<script>
import ProfileScript from '/resources/js/Profile.js';

export default {
  name: 'Profile',
  data() {
    return ProfileScript.data();
  },
  mounted() {
    ProfileScript.mounted.call(this);
  },
  methods: ProfileScript.methods
};
</script>

<style scoped src="/resources/css/Profile.css"></style>
