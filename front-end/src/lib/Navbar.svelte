<script>

    import { currentPage,isLogged } from "../stores";
  
  function logout() {
    fetch("https:/localhost:8000/logout.php", {
        credentials: "include",
    });
    $isLogged = false;
    $currentPage = 'index';
  }
  
  </script>
  
  
   <button on:click={() =>($currentPage = 'index')}>
    Index
   </button>
  
  
  
 {#if !$isLogged}
  
  <button on:click={() => ($currentPage = 'register')}>
      Register
   </button>
   
   <button on:click={()=>($currentPage = 'register')}>
    login
    </button>
{:else}
    <button on:click={()=>($currentPage = 'home')}>Pagina inicial</button>

    <button on:click={()=>($currentPage = 'home')}>Home</button>
    <button on:click={logout}>Sair</button>
{/if}