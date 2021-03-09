import { StacheElement } from 'can';

export default class Home extends StacheElement {
    static view = `Hello Inertia PSR15`;
}

customElements.define('app-home', Home);