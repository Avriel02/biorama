<button class="page-marker" id="pageMarker" onclick="toggleSidebar()">
      <i class="fa-solid fa-wheelchair"></i>
    </button>

    <!-- Sidebar Akses disabilitas -->
    <div class="accessibility-sidebar" id="sidebar">
      <div class="accessibility-menu">
        <ul>
          <li>
            <ion-icon name="add"></ion-icon
            ><button onclick="increaseTextSize()">Perbesar Teks</button>
          </li>
          <li>
            <ion-icon name="remove"></ion-icon
            ><button onclick="decreaseTextSize()">Perkecil Teks</button>
          </li>
          <li>
            <ion-icon name="water"></ion-icon
            ><button onclick="toggleGrayscale()">Grayscale</button>
          </li>
          <li>
            <ion-icon name="sunny"></ion-icon
            ><button onclick="toggleHighContrast()">Kontras Tinggi</button>
          </li>
          <li>
            <ion-icon name="contrast"></ion-icon
            ><button onclick="toggleNegativeContrast()">Kontras Negatif</button>
          </li>
          <li>
            <ion-icon name="link"></ion-icon
            ><button onclick="toggleUnderlineLinks()">
              Garis Bawah Tautan
            </button>
          </li>
          <li>
            <ion-icon name="arrow-undo-circle"></ion-icon
            ><button onclick="togglereset()">Reset</button>
          </li>
        </ul>
      </div>
    </div>