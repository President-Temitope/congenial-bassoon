"use strict";!function(){new DualListbox("#basic-listbox"),new DualListbox("#preselected-listbox");new DualListbox("#nosearch-listbox").search.classList.add("dual-listbox__search--hidden");new DualListbox("#custom-labels-listbox",{availableTitle:"Source Options",selectedTitle:"Destination Options",addButtonText:'<em class="icon ni ni-chevron-right"></em>',removeButtonText:'<em class="icon ni ni-chevron-left"></em>',addAllButtonText:'<em class="icon ni ni-chevrons-right"></em>',removeAllButtonText:'<em class="icon ni ni-chevrons-left"></em>'})}((NioApp,jQuery));