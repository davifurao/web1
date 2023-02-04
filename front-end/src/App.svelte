<script>
  import Index from "./lib/Index.svelte";
  import Navbar from "./lib/Navbar.svelte";
  import Register from "./lib/Register.svelte";
  import login from "./lib/Login.svelte"
  import { currentPage, isLogged } from "./stores";
  import Home from "./lib/Home.svelte";
</script>

<main>
  <Navbar />


  {#if $isLogged}
    Está logado
  {:else}
    Não está logado
  {/if}


  {#if $currentPage == 'index'}
    <Index />
  {:else if $currentPage == 'register'}
    <Register />

  {:else if $currentPage == 'login'}
    <Login />

  {:else if $currentPage == 'home'}
  <Home/>
  {/if}

</main>