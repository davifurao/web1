<script>

    import { currentPage,isLogged } from "../stores";
  
  
  
  </script>
  
  
  
  
  
 {#if !$isLogged}
    
 
  
  <button on:click={() => $currentPage = 'index'}>
      Index
  </button>
  
  <button on:click={() => $currentPage = 'register'}>
      Register
   </button>
   
   
   <button on:click={()=>$currentPage = 'login'}>
    login
    </button>
{:else}
    <button on:click={()=>$currentPage = 'home'}>Pagina inicial</button>

    <button on:click={()=>$isLogged = false}>Sair</button>
{/if}