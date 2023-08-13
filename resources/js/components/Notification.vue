<template>
    <div class="notification-container">
      <div v-for="notification in notifications" :key="notification.id" class="notification" :class="notification.type">
        {{ notification.message }}
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  
  export default {
    name: 'Notification',
    setup() {
      const notifications = ref([]);
  
      const addNotification = (message, type) => {
        notifications.value.push({
          id: Date.now(),
          message,
          type
        });
  
        setTimeout(() => {
          notifications.value = notifications.value.filter(n => n.id !== id);
        }, 5000);
      };
  
      return {
        notifications,
        addNotification
      };
    }
  };
  </script>
  
  <style scoped>
  .notification-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
  }
  
  .notification {
    padding: 10px 20px;
    margin: 10px 0;
    border-radius: 4px;
    color: #fff;
    font-size: 14px;
    text-align: center;
    opacity: 0.9;
    transition: opacity 0.3s ease-in-out;
  }
  
  .success {
    background-color: #28a745;
  }
  
  .error {
    background-color: #dc3545;
  }
  
  .notification:hover {
    opacity: 1;
  }
  </style>
  