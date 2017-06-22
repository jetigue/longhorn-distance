<nav class="nav" id="dropdown-navbar">
<div id="app">

  <a href="#" class="trigger" v-el:trigger>Top Left</a>
  <dropdown :trigger="$els.trigger" position="top left">
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li><a href="#">Logout</a></li>
  </dropdown>

  <a href="#" class="trigger" v-el:trigger2>Bottom Left</a>
  <dropdown :trigger="$els.trigger2">
    <li><a href="#">Dashboard 2</a></li>
    <li><a href="#">Settings 2</a></li>
    <li><a href="#">Logout 2</a></li>
  </dropdown>
</div>

</nav>

<template id="dropdown">
  <ul class="menu" v-el:dropdown>
    <slot></slot>
  </ul>
</template>