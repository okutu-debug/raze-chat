import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const AlarmMinus: IconNode = [
  'svg',
  defaultAttributes,
  [
    ['circle', { cx: '12', cy: '13', r: '8' }],
    ['path', { d: 'M5 3 2 6' }],
    ['path', { d: 'm22 6-3-3' }],
    ['path', { d: 'M6.38 18.7 4 21' }],
    ['path', { d: 'M17.64 18.67 20 21' }],
    ['path', { d: 'M9 13h6' }],
  ],
];

export default AlarmMinus;
