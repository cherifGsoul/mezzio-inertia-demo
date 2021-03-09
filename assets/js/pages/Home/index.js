import { StacheElement } from 'can';

export default class Home extends StacheElement {
    static view = `Hello {{greeting}}`;
    static props = {
        greeting: String
    }
}

customElements.define('app-home', Home);