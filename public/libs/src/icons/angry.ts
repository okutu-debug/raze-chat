import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const Angry: IconNode = [
  'svg',
  defaultAttributes,
  [
    ['circle', { cx: '12', cy: '12', r: '10' }],
    ['path', { d: 'M16 16s-1.5-2-4-2-4 2-4 2' }],
    ['path', { d: 'M7.5 8 10 9' }],
    ['path', { d: 'm14 9 2.5-1' }],
    ['path', { d: 'M9 10h0' }],
    ['path', { d: 'M15 10h0' }],
  ],
];

export default Angry;
