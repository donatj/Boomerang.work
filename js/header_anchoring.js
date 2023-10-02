/**
 * @param rootElm HTMLElement
 * @param contentElm HTMLElement
 * @param max_depth Number
 */
function header_anchoring( rootElm, contentElm, max_depth ) {
	let output = '';
	let i = 0;

	let last_hv = 0;
	/** @type {NodeListOf<HTMLElement>} */
	const hItems = rootElm.querySelectorAll('h1,h2,h3,h4,h5,h6,h7,h8');

	for (const e of hItems) {
		const tag = e.tagName;
		const hv = parseInt(/^h(\d+)/gi.exec(tag)[1], 10);
		const hv_diff = hv - last_hv;

		if(hv > max_depth) {
			continue;
		}

		if( hv_diff > 0 ) {
			output += '<ul>'.repeat( hv_diff );
		}else if( hv_diff < 0 ){
			output += '</ul>'.repeat( 0 - hv_diff );
		}

		let id;
		if( !(id = e.getAttribute('id')) ) {
			id   = 'hqlink-' + i;
		}

		const href = location.protocol + '//' + location.host + location.pathname + '#' + id;

		const a = document.createElement('a');
		a.setAttribute('href', href);
		a.classList.add('quicklink');
		a.innerText = e.innerText;

		a.addEventListener('click', function(ev) {
			ev.preventDefault();
			e.scrollIntoView({
					behavior: 'smooth',
					block: 'start',
			});
		});

		output += '<li>' + a.outerHTML + '</li>';

		last_hv = hv;
		i++;
	}

	output += '</ul>'.repeat( last_hv );
	
	contentElm.innerHTML = output;
}
