import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const Annoyed: IconNode = [
  'svg',
  defaultAttributes,
  [
    ['circle', { cx: '12', cy: '12', r: '10' }],
    ['path', { d: 'M8 15h8' }],
    ['path', { d: 'M8 9h2' }],
    ['path', { d: 'M14 9h2' }],
  ],
];

export default Annoyed;
