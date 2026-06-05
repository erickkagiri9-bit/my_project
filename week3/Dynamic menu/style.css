/* style.css */

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Inter',sans-serif;
}

body{
  min-height:100vh;
  overflow-x:hidden;
  background:#020617;
  position:relative;
}

/* ANIMATED BACKGROUND */

.background{
  position:fixed;
  width:100%;
  height:100%;
  background:
  radial-gradient(circle at top left,#7c3aed,transparent 25%),
  radial-gradient(circle at bottom right,#06b6d4,transparent 25%),
  radial-gradient(circle at center,#2563eb,transparent 20%);
  filter:blur(90px);
  animation:bgMove 10s infinite alternate;
}

@keyframes bgMove{

  0%{
    transform:scale(1) translate(0,0);
  }

  100%{
    transform:scale(1.1) translate(20px,20px);
  }

}

/* NAVBAR */

.navbar{
  width:92%;
  height:85px;
  margin:25px auto;
  padding:0 35px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  position:relative;
  z-index:100;
  border-radius:22px;
  background:rgba(255,255,255,0.06);
  border:1px solid rgba(255,255,255,0.08);
  backdrop-filter:blur(18px);
  box-shadow:
  0 10px 35px rgba(0,0,0,0.3);
}

/* LOGO */

.logo{
  display:flex;
  align-items:center;
  gap:12px;
  color:white;
}

.logo-icon{
  width:48px;
  height:48px;
  border-radius:14px;
  display:flex;
  justify-content:center;
  align-items:center;
  background:
  linear-gradient(
    135deg,
    #7c3aed,
    #2563eb
  );
  font-size:20px;
}

/* NAV LINKS */

.nav-menu{
  display:flex;
  gap:35px;
}

.nav-menu a{
  text-decoration:none;
  color:#cbd5e1;
  font-size:15px;
  font-weight:500;
  transition:0.3s;
  position:relative;
}

/* ACTIVE LINK */

.nav-menu a.active{
  color:white;
}

/* HOVER EFFECT */

.nav-menu a::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-8px;
  width:0%;
  height:2px;
  border-radius:20px;
  background:#38bdf8;
  transition:0.3s;
}

.nav-menu a:hover::after,
.nav-menu a.active::after{
  width:100%;
}

.nav-menu a:hover{
  color:white;
}

/* RIGHT SECTION */

.right-section{
  display:flex;
  align-items:center;
  gap:18px;
}

/* BUTTON */

.login-btn{
  padding:12px 24px;
  border:none;
  border-radius:14px;
  background:
  linear-gradient(
    135deg,
    #7c3aed,
    #2563eb
  );
  color:white;
  font-size:14px;
  font-weight:600;
  cursor:pointer;
  transition:0.3s;
}

.login-btn:hover{
  transform:translateY(-2px);
  box-shadow:
  0 10px 25px rgba(37,99,235,0.4);
}

/* MENU BUTTON */

.menu-btn{
  width:42px;
  height:42px;
  display:none;
  flex-direction:column;
  justify-content:center;
  gap:6px;
  cursor:pointer;
}

.menu-btn span{
  width:100%;
  height:3px;
  border-radius:20px;
  background:white;
  transition:0.4s;
}

/* MOBILE */

@media(max-width:900px){

  .menu-btn{
    display:flex;
  }

  .nav-menu{
    position:absolute;
    top:105px;
    left:0;
    width:100%;
    padding:35px;
    flex-direction:column;
    border-radius:22px;
    background:rgba(15,23,42,0.95);
    backdrop-filter:blur(20px);
    border:1px solid rgba(255,255,255,0.08);
    transform:translateY(-30px);
    opacity:0;
    pointer-events:none;
    transition:0.4s;
  }

  .nav-menu.active{
    transform:translateY(0);
    opacity:1;
    pointer-events:auto;
  }

  .login-btn{
    display:none;
  }

}

/* MENU ANIMATION */

.menu-btn.active span:nth-child(1){
  transform:
  rotate(45deg)
  translate(7px,7px);
}

.menu-btn.active span:nth-child(2){
  opacity:0;
}

.menu-btn.active span:nth-child(3){
  transform:
  rotate(-45deg)
  translate(6px,-6px);
}