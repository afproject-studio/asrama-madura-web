    </main> <!-- akhir .admin-content -->
    </div> <!-- akhir .admin-layout -->
    
    </body>
<script>
const sidebar = document.getElementById("adminSidebar");
const content = document.getElementById("adminContent");
const toggleBtn = document.getElementById("sidebarToggle");
const navAuth = document.getElementById("navAuth");

toggleBtn.addEventListener("click", () => {
    sidebar.classList.toggle("active");
    content.classList.toggle("shifted");
    navAuth.classList.toggle("shifted");
});
    </script>
    </html>